<?php

declare(strict_types=1);

/**
 * Microsoft Graph SDK Generator - Memory-Efficient Chunked Processor
 * 
 * This script processes the Microsoft Graph OpenAPI specification in chunks
 * to avoid memory issues. It generates models and request builders per namespace.
 */

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/generator-functions.php';

use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Yaml\Yaml;

// Configuration
const OPENAPI_URL = 'https://raw.githubusercontent.com/microsoftgraph/msgraph-metadata/master/openapi/v1.0/openapi.yaml';
const OPENAPI_FILE = __DIR__ . '/openapi.yaml';
const TMP_DIR = __DIR__ . '/tmp';
const BUILD_DIR = __DIR__ . '/build';

$output = new ConsoleOutput();

$output->writeln('<info>Microsoft Graph SDK Generator - Chunked Processor</info>');
$output->writeln('<info>==================================================</info>');
$output->writeln('');

// Step 1: Setup directories
setupDirectories($output);

// Step 2: Download OpenAPI spec if not exists
downloadOpenApiSpec($output);

// Step 3: Parse schemas in chunks
$output->writeln('<info>Parsing OpenAPI schemas...</info>');
$schemas = parseSchemas($output);
$output->writeln("<info>✓ Found " . count($schemas) . " schemas</info>");

// Step 4: Generate individual models from schemas
$output->writeln('<info>Generating individual models from schemas...</info>');
generateIndividualModels($schemas, $output);

// Step 5: Generate collection models
$output->writeln('<info>Generating collection response models...</info>');
generateAllCollectionModels($schemas, $output);

// Step 5.5: Generate QueryOptions classes (base class is in src/)
$output->writeln('<info>Generating QueryOptions classes...</info>');
generateAllQueryOptions($schemas, $output);

// Step 6: Chunk paths by namespace
$output->writeln('<info>Analyzing and chunking API paths...</info>');
$namespaceCount = analyzeAndChunkOpenApi($output);
$output->writeln("<info>✓ Created {$namespaceCount} namespace chunks</info>");

// Step 7: Process namespace chunks and generate request builders
$output->writeln('<info>Processing namespace chunks...</info>');
$rootNamespaces = processNamespaceChunks($output);

// Step 8: Base classes are in src/ (no generation needed)

// Step 9: Generate root request builder
$output->writeln('<info>Generating root request builder...</info>');
generateRootRequestBuilder(BUILD_DIR, $rootNamespaces);
$output->writeln('<info>✓ Root request builder generated</info>');

$output->writeln('');
$output->writeln('<info>✅ SDK generation completed successfully!</info>');
$output->writeln('<comment>Generated files are in: ' . BUILD_DIR . '</comment>');
/**
 * Setup required directories
 */
function setupDirectories($output): void
{
    $output->writeln('<info>Setting up directories...</info>');
    
    // Clean and create tmp directory
    if (is_dir(TMP_DIR)) {
        deleteDirectory(TMP_DIR);
    }
    mkdir(TMP_DIR, 0755, true);
    
    // Clean and create build directory
    if (is_dir(BUILD_DIR)) {
        deleteDirectory(BUILD_DIR);
    }
    mkdir(BUILD_DIR, 0755, true);
    mkdir(BUILD_DIR . '/Models', 0755, true);
    mkdir(BUILD_DIR . '/RequestBuilders', 0755, true);
    
    $output->writeln('<info>✓ Directories ready</info>');
}

/**
 * Delete directory recursively
 */
function deleteDirectory(string $dir): void
{
    if (!is_dir($dir)) {
        return;
    }
    
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );

    foreach ($files as $fileinfo) {
        $todo = ($fileinfo->isDir() ? 'rmdir' : 'unlink');
        $todo($fileinfo->getRealPath());
    }
    rmdir($dir);
}

/**
 * Download OpenAPI specification
 */
function downloadOpenApiSpec($output): void
{
    if (file_exists(OPENAPI_FILE)) {
        $output->writeln('<comment>Using existing OpenAPI file</comment>');
        return;
    }
    
    $output->writeln('<info>Downloading Microsoft Graph OpenAPI specification...</info>');
    $output->writeln('<comment>This may take a while (file is large)...</comment>');
    
    $openApiContent = file_get_contents(OPENAPI_URL);
    if ($openApiContent === false) {
        $output->writeln('<error>Failed to download OpenAPI specification</error>');
        exit(1);
    }
    
    file_put_contents(OPENAPI_FILE, $openApiContent);
    $output->writeln('<info>✓ OpenAPI specification downloaded</info>');
}

/**
 * Parse schemas from OpenAPI file
 */
function parseSchemas($output): array
{
    $output->writeln('<comment>  Reading schemas section...</comment>');
    
    $handle = fopen(OPENAPI_FILE, 'r');
    if (!$handle) {
        return [];
    }
    
    $inSchemas = false;
    $currentSchema = null;
    $schemaContent = [];
    $schemas = [];
    $schemaCount = 0;
    
    while (($line = fgets($handle)) !== false) {
        // Detect schemas section (2 spaces indentation)
        if (preg_match('/^  schemas:\s*$/', $line)) {
            $inSchemas = true;
            continue;
        }
        
        if ($inSchemas) {
            // Exit schemas section (back to components level or other top-level)
            if (preg_match('/^  [a-z]/', $line) && !preg_match('/^    /', $line)) {
                if ($currentSchema && !empty($schemaContent)) {
                    $schemas[$currentSchema] = parseSimpleYaml(implode('', $schemaContent));
                }
                break;
            }
            
            // Detect new schema (4 spaces indentation)
            if (preg_match('/^    ([a-zA-Z0-9._-]+):\s*$/', $line, $matches)) {
                if ($currentSchema && !empty($schemaContent)) {
                    $schemas[$currentSchema] = parseSimpleYaml(implode('', $schemaContent));
                    $schemaCount++;
                    
                    if ($schemaCount % 100 == 0) {
                        gc_collect_cycles();
                        $output->writeln("<comment>    Parsed {$schemaCount} schemas...</comment>");
                    }
                }
                
                $currentSchema = $matches[1];
                $schemaContent = [];
                continue;
            }
            
            if ($currentSchema) {
                $schemaContent[] = $line;
            }
        }
    }
    
    if ($currentSchema && !empty($schemaContent)) {
        $schemas[$currentSchema] = parseSimpleYaml(implode('', $schemaContent));
    }
    
    fclose($handle);
    
    return $schemas;
}

/**
 * Simple YAML parser for schema properties
 */
function parseSimpleYaml(string $content): array
{
    $schema = ['properties' => []];
    $lines = explode("\n", $content);
    $inProperties = false;
    $inAllOf = false;
    $currentProperty = null;
    $inItems = false;
    $depth = 0;
    
    foreach ($lines as $line) {
        // Detect allOf (which contains properties)
        if (preg_match('/^      allOf:\s*$/', $line)) {
            $inAllOf = true;
            continue;
        }
        
        // Detect properties section (can be at different depths)
        if (preg_match('/^(\s+)properties:\s*$/', $line, $matches)) {
            $inProperties = true;
            $depth = strlen($matches[1]);
            continue;
        }
        
        if ($inProperties) {
            // Exit properties if we go back to lower indentation
            if (preg_match('/^(\s+)\S/', $line, $matches)) {
                $lineDepth = strlen($matches[1]);
                if ($lineDepth <= $depth && !preg_match('/^\s+type:/', $line) && !preg_match('/^\s+format:/', $line) && !preg_match('/^\s+description:/', $line) && !preg_match('/^\s+items:/', $line)) {
                    $inProperties = false;
                    $currentProperty = null;
                    $inItems = false;
                }
            }
            
            // New property (depth + 2 spaces)
            if (preg_match('/^' . str_repeat(' ', $depth + 2) . '([a-zA-Z0-9_@]+):\s*$/', $line, $matches)) {
                $currentProperty = $matches[1];
                $schema['properties'][$currentProperty] = ['type' => 'string'];
                $inItems = false;
            } elseif ($currentProperty && preg_match('/^\s+type:\s*(.+)$/', $line, $matches)) {
                $type = trim($matches[1]);
                if ($inItems) {
                    // This is the type inside items
                    $schema['properties'][$currentProperty]['items']['type'] = $type;
                } else {
                    $schema['properties'][$currentProperty]['type'] = $type;
                }
            } elseif ($currentProperty && preg_match('/^\s+items:\s*$/', $line)) {
                // Entering items section for array type
                $inItems = true;
                $schema['properties'][$currentProperty]['items'] = [];
            } elseif ($currentProperty && preg_match('/^\s+format:\s*(.+)$/', $line, $matches)) {
                $schema['properties'][$currentProperty]['format'] = trim($matches[1]);
            } elseif ($currentProperty && preg_match('/^\s+description:\s*(.+)$/', $line, $matches)) {
                $schema['properties'][$currentProperty]['description'] = trim($matches[1], '"\'');
            }
        }
    }
    
    return $schema;
}

/**
 * Generate individual models from schemas
 */
function generateIndividualModels(array $schemas, $output): void
{
    $modelsDir = BUILD_DIR . '/Models';
    $generated = 0;
    
    foreach ($schemas as $schemaName => $schemaData) {
        $modelName = normalizeModelName($schemaName);
        
        // Skip collection response schemas - they'll be generated separately with proper type hints
        if (str_ends_with(strtolower($schemaName), 'collectionresponse')) {
            continue;
        }
        
        // Escape reserved keywords for filename (PSR-4 compliance)
        $escapedModelName = escapeReservedKeyword($modelName);
        $filePath = $modelsDir . "/{$escapedModelName}.php";
        if (file_exists($filePath)) {
            continue;
        }
        
        // Generate model (even if empty - some models have only @odata.type)
        $properties = [];
        
        // Handle allOf schemas (merge all properties)
        if (isset($schemaData['allOf'])) {
            foreach ($schemaData['allOf'] as $idx => $subSchema) {
                if (isset($subSchema['properties'])) {
                    $properties = array_merge($properties, $subSchema['properties']);
                }
            }
        } else {
            $properties = $schemaData['properties'] ?? [];
        }
        
        $code = generateModelCode($modelName, $properties);
        file_put_contents($filePath, $code);
        
        $generated++;
        if ($generated % 50 == 0) {
            $output->writeln("<comment>  Generated {$generated} models...</comment>");
            gc_collect_cycles();
        }
    }
    
    $output->writeln("<info>✓ Generated {$generated} individual models</info>");
}

/**
 * Generate model code
 */
function generateModelCode(string $modelName, array $properties): string
{
    // Escape reserved keywords
    $escapedModelName = escapeReservedKeyword($modelName);
    
    // Map property types
    $mappedProperties = [];
    foreach ($properties as $propName => $propDef) {
        $mappedProperties[$propName] = [
            'type' => mapPropertyType($propDef),
            'description' => $propDef['description'] ?? '',
            'items' => $propDef['items'] ?? null
        ];
    }
    
    return renderTemplate('Model.php.template', [
        'MODEL_NAME' => $escapedModelName,
        'PROPERTIES' => $mappedProperties
    ]);
}

/**
 * Map property type to PHP type
 */
function mapPropertyType(array $propDef): string
{
    $type = $propDef['type'] ?? 'string';
    $format = $propDef['format'] ?? null;
    
    if ($type === 'array') {
        return 'array';
    }
    
    if ($type === 'object') {
        return '?array';
    }
    
    if ($type === 'integer') {
        return '?int';
    }
    
    if ($type === 'number') {
        return '?float';
    }
    
    if ($type === 'boolean') {
        return '?bool';
    }
    
    if ($type === 'string') {
        if ($format === 'date-time' || $format === 'date') {
            return '?\DateTimeInterface';
        }
        return '?string';
    }
    
    return '?mixed';
}

/**
 * Generate all collection response models
 */
function generateAllCollectionModels(array $schemas, $output): void
{
    $modelsDir = BUILD_DIR . '/Models';
    $generated = 0;
    
    // Generate CollectionResponse for all existing models (not just schemas with properties)
    $modelFiles = glob($modelsDir . '/*.php');
    foreach ($modelFiles as $modelFile) {
        $modelName = basename($modelFile, '.php');
        
        // Skip if already a collection response
        if (str_ends_with($modelName, 'CollectionResponse')) {
            continue;
        }
        
        $collectionName = "{$modelName}CollectionResponse";
        $filePath = $modelsDir . "/{$collectionName}.php";
        
        if (file_exists($filePath)) {
            continue;
        }
        
        $code = generateCollectionResponseCode($collectionName, $modelName);
        file_put_contents($filePath, $code);
        $generated++;
    }
    
    $output->writeln("<info>✓ Generated {$generated} collection response models</info>");
}

/**
 * Copy base QueryOptions class to build directory
 */
function copyBaseQueryOptions(): void
{
    $templateFile = __DIR__ . '/templates/QueryOptions.php.template';
    $targetFile = BUILD_DIR . '/QueryOptions/QueryOptions.php';
    
    if (!file_exists($templateFile)) {
        throw new Exception("Template file not found: {$templateFile}");
    }
    
    $targetDir = dirname($targetFile);
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }
    
    copy($templateFile, $targetFile);
}

/**
 * Render template with variables using PHP output buffering
 */
function renderTemplate(string $templateName, array $data): string
{
    $templateFile = __DIR__ . '/templates/' . $templateName;
    
    if (!file_exists($templateFile)) {
        throw new Exception("Template file not found: {$templateFile}");
    }
    
    // Extract variables into current scope
    extract($data, EXTR_SKIP);
    
    // Start output buffering
    ob_start();
    
    // Include the template file
    include $templateFile;
    
    // Get the buffer contents and clean
    return ob_get_clean();
}

/**
 * Check if a name is a PHP reserved keyword
 */
function isReservedKeyword(string $name): bool
{
    $reserved = [
        'abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch', 'class',
        'clone', 'const', 'continue', 'declare', 'default', 'die', 'do', 'echo', 'else',
        'elseif', 'empty', 'enddeclare', 'endfor', 'endforeach', 'endif', 'endswitch',
        'endwhile', 'eval', 'exit', 'extends', 'final', 'finally', 'fn', 'for', 'foreach',
        'function', 'global', 'goto', 'if', 'implements', 'include', 'include_once',
        'instanceof', 'insteadof', 'interface', 'isset', 'list', 'match', 'namespace',
        'new', 'or', 'print', 'private', 'protected', 'public', 'readonly', 'require',
        'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'unset',
        'use', 'var', 'while', 'xor', 'yield', 'yield from'
    ];
    
    return in_array(strtolower($name), $reserved);
}

/**
 * Escape reserved keywords by adding suffix
 */
function escapeReservedKeyword(string $name): string
{
    if (isReservedKeyword($name)) {
        return $name . 'Model';
    }
    return $name;
}

/**
 * Generate collection response code
 */
function generateCollectionResponseCode(string $collectionName, string $modelName): string
{
    // Escape reserved keywords
    $escapedModelName = escapeReservedKeyword($modelName);
    
    return renderTemplate('CollectionResponse.php.template', [
        'COLLECTION_NAME' => $collectionName,
        'MODEL_NAME' => $escapedModelName
    ]);
}

/**
 * Generate QueryOptions classes for all models
 */
function generateAllQueryOptions(array $schemas, $output): void
{
    $queryOptionsDir = BUILD_DIR . '/QueryOptions';
    if (!is_dir($queryOptionsDir)) {
        mkdir($queryOptionsDir, 0755, true);
    }
    
    $modelsDir = BUILD_DIR . '/Models';
    $generated = 0;
    
    // Generate QueryOptions for all existing models (not just schemas with properties)
    $modelFiles = glob($modelsDir . '/*.php');
    foreach ($modelFiles as $modelFile) {
        $modelName = basename($modelFile, '.php');
        
        // Skip collection responses - they have their own QueryOptions
        if (str_ends_with($modelName, 'CollectionResponse')) {
            continue;
        }
        
        $className = "{$modelName}QueryOptions";
        $filePath = $queryOptionsDir . "/{$className}.php";
        
        if (file_exists($filePath)) {
            continue;
        }
        
        // Get properties from schema if available, otherwise use empty array
        $properties = [];
        foreach ($schemas as $schemaName => $schemaData) {
            if (normalizeModelName($schemaName) === $modelName && !empty($schemaData['properties'])) {
                $properties = $schemaData['properties'];
                break;
            }
        }
        
        $code = generateQueryOptionsCode($modelName, $properties);
        file_put_contents($filePath, $code);
        $generated++;
    }
    
    $output->writeln("<info>✓ Generated {$generated} QueryOptions classes</info>");
}

/**
 * Generate QueryOptions class code
 */
function generateQueryOptionsCode(string $modelName, array $properties): string
{
    $className = "{$modelName}QueryOptions";
    
    return renderTemplate('ModelQueryOptions.php.template', [
        'CLASS_NAME' => $className,
        'MODEL_NAME' => $modelName,
        'PROPERTIES' => $properties
    ]);
}

/**
 * Analyze OpenAPI file and chunk by namespace
 */
function analyzeAndChunkOpenApi($output): int
{
    $output->writeln('<comment>Reading OpenAPI file line by line...</comment>');
    
    $handle = fopen(OPENAPI_FILE, 'r');
    if (!$handle) {
        $output->writeln('<error>Failed to open OpenAPI file</error>');
        exit(1);
    }
    
    $currentPath = null;
    $currentChunk = [];
    $chunkFiles = [];
    $namespaceMap = [];
    $inPaths = false;
    $inSchemas = false;
    $pathCount = 0;
    $schemaCount = 0;
    
    // First pass: Extract schemas (components)
    $schemasContent = [];
    $inComponents = false;
    $componentDepth = 0;
    
    while (($line = fgets($handle)) !== false) {
        // Detect components section
        if (preg_match('/^components:\s*$/', $line)) {
            $inComponents = true;
            $schemasContent[] = $line;
            continue;
        }
        
        if ($inComponents) {
            $schemasContent[] = $line;
            
            // Track depth to know when we exit components
            if (preg_match('/^(\s+)/', $line, $matches)) {
                $indent = strlen($matches[1]);
                if ($indent === 0 && trim($line) !== '') {
                    $inComponents = false;
                }
            }
        }
    }
    
    // Save schemas to separate file
    if (!empty($schemasContent)) {
        file_put_contents(TMP_DIR . '/schemas.yaml', implode('', $schemasContent));
        $output->writeln('<comment>  - Extracted schemas</comment>');
    }
    
    // Second pass: Extract and chunk paths by base resource
    rewind($handle);
    $pathsByNamespace = [];
    $inPaths = false;
    $currentPath = null;
    $pathContent = [];
    
    while (($line = fgets($handle)) !== false) {
        if (preg_match('/^paths:\s*$/', $line)) {
            $inPaths = true;
            continue;
        }
        
        if ($inPaths) {
            // Detect new path (starts with '  /')
            if (preg_match('/^  (\/[^:]+):\s*$/', $line, $matches)) {
                // Save previous path
                if ($currentPath !== null && !empty($pathContent)) {
                    // Extract base namespace from path
                    if (preg_match('#^/([^/\{]+)#', $currentPath, $nsMatches)) {
                        $namespace = $nsMatches[1];
                        if (!isset($pathsByNamespace[$namespace])) {
                            $pathsByNamespace[$namespace] = [];
                        }
                        $pathsByNamespace[$namespace][$currentPath] = implode('', $pathContent);
                    }
                }
                
                $currentPath = $matches[1];
                $pathContent = [$line];
                $pathCount++;
                continue;
            }
            
            // Collect path content
            if ($currentPath !== null) {
                $pathContent[] = $line;
            }
            
            // Exit paths section
            if (preg_match('/^[a-z]+:\s*$/', $line) && !preg_match('/^paths:/', $line)) {
                // Save last path
                if ($currentPath !== null && !empty($pathContent)) {
                    if (preg_match('#^/([^/\{]+)#', $currentPath, $nsMatches)) {
                        $namespace = $nsMatches[1];
                        if (!isset($pathsByNamespace[$namespace])) {
                            $pathsByNamespace[$namespace] = [];
                        }
                        $pathsByNamespace[$namespace][$currentPath] = implode('', $pathContent);
                    }
                }
                break;
            }
        }
    }
    
    // Write namespace chunks
    foreach ($pathsByNamespace as $namespace => $paths) {
        $chunkFile = TMP_DIR . "/paths_{$namespace}.yaml";
        $content = "paths:\n";
        foreach ($paths as $path => $pathData) {
            $content .= $pathData;
        }
        file_put_contents($chunkFile, $content);
        $chunkFiles[] = $chunkFile;
    }
    
    fclose($handle);
    
    $output->writeln("<comment>  - Extracted {$pathCount} path groups</comment>");
    
    return count($chunkFiles);
}

/**
 * Process each namespace chunk
 */
function processNamespaceChunks($output): array
{
    $chunkFiles = glob(TMP_DIR . '/paths_*.yaml');
    $schemasFile = TMP_DIR . '/schemas.yaml';
    $rootNamespaces = [];
    
    // Load schemas once
    $schemas = [];
    if (file_exists($schemasFile)) {
        try {
            $schemasData = Yaml::parseFile($schemasFile);
            $schemas = $schemasData['components']['schemas'] ?? [];
        } catch (Exception $e) {
            $output->writeln('<comment>  - Could not parse schemas, will use basic types</comment>');
        }
    }
    
    foreach ($chunkFiles as $chunkFile) {
        $namespace = basename($chunkFile, '.yaml');
        $namespace = str_replace('paths_', '', $namespace);
        
        // Skip "base" namespace as it conflicts with BaseRequestBuilder
        if ($namespace === 'base') {
            $output->writeln("<comment>  - Skipping: {$namespace} (reserved for base class)</comment>");
            continue;
        }
        
        $output->writeln("<comment>  - Processing: {$namespace}</comment>");
        
        try {
            processNamespace($namespace, $chunkFile, $schemas, $output);
            $rootNamespaces[] = $namespace; // Track root namespaces
        } catch (Exception $e) {
            $output->writeln("<error>    Error processing {$namespace}: " . $e->getMessage() . "</error>");
        }
        
        // Free memory
        gc_collect_cycles();
    }
    
    return $rootNamespaces;
}

/**
 * Process a single namespace
 */
function processNamespace(string $namespace, string $chunkFile, array $schemas, $output): void
{
    // Parse the chunk
    try {
        $data = Yaml::parseFile($chunkFile);
    } catch (Exception $e) {
        $output->writeln("<comment>    Skipping {$namespace} - parse error</comment>");
        return;
    }
    
    $paths = $data['paths'] ?? [];
    if (empty($paths)) {
        return;
    }
    
    // Extract models from paths
    $models = extractModelsFromPaths($paths, $schemas);
    
    // Generate models
    foreach ($models as $modelName => $modelDef) {
        generateModelFromDefinition(BUILD_DIR . '/Models', $modelName, $modelDef);
    }
    
    // Generate request builders for root namespace
    generateRequestBuildersForNamespace($namespace, $paths, $output);
    
    // Generate request builders for all subpaths
    generateSubpathRequestBuilders($namespace, $paths, $output);
}

/**
 * Generate request builders for all subpaths
 */
function generateSubpathRequestBuilders(string $namespace, array $paths, $output): void
{
    $builderDir = BUILD_DIR . '/RequestBuilders';
    $generatedBuilders = [];
    
    foreach ($paths as $path => $methods) {
        // Extract all path segments after the base namespace with parameter
        // e.g., /users/{user-id}/activities -> activities
        // e.g., /users/{user-id}/authentication/emailMethods -> authentication, emailMethods
        
        // Match pattern: /namespace/{any-parameter}/subpath
        if (preg_match("#^/{$namespace}/\\{[^}]+\\}/(.+)$#", $path, $matches)) {
            $subpath = $matches[1];
            $segments = explode('/', $subpath);
            
            // Build path pattern for matching
            $pathPattern = "/{$namespace}/\\{[^}]+\\}";
            
            foreach ($segments as $segment) {
                // Skip parameter segments
                if (preg_match('/^\{.+\}$/', $segment)) {
                    $pathPattern .= "/\\{[^}]+\\}";
                    continue;
                }
                
                // Skip segments with invalid characters (like function calls with parentheses)
                if (preg_match('/[^a-zA-Z0-9_-]/', $segment)) {
                    continue;
                }
                
                // Normalize segment name (remove namespace prefixes like "microsoft.graph.")
                $normalizedSegment = preg_replace('/^microsoft\.graph\./', '', $segment);
                $normalizedSegment = str_replace('.', '_', $normalizedSegment); // Replace dots with underscores
                
                $builderName = ucfirst($normalizedSegment) . 'RequestBuilder';
                
                // Skip if already generated
                if (isset($generatedBuilders[$builderName])) {
                    $pathPattern .= "/{$segment}";
                    continue;
                }
                
                $pathPattern .= "/{$segment}";
                
                // Find all paths that match this pattern
                $segmentPaths = [];
                foreach ($paths as $p => $m) {
                    // Match paths that start with the pattern
                    if (preg_match("#^" . $pathPattern . "(/|$)#", $p)) {
                        $segmentPaths[$p] = $m;
                    }
                }
                
                if (!empty($segmentPaths)) {
                    generateSubpathBuilder($normalizedSegment, $segmentPaths, $builderDir, $output);
                    $generatedBuilders[$builderName] = true;
                }
            }
        }
    }
}

/**
 * Generate a request builder for a subpath
 */
function generateSubpathBuilder(string $subresource, array $paths, string $dir, $output): void
{
    $className = ucfirst($subresource) . 'RequestBuilder';
    $filePath = $dir . "/{$className}.php";
    
    // Skip BaseRequestBuilder - it's in src/
    if ($className === 'BaseRequestBuilder') {
        return;
    }
    
    // Skip workbook functions namespace (contains Excel function endpoints without models)
    if ($subresource === 'functions' || $className === 'FunctionsRequestBuilder') {
        return;
    }
    
    // Skip if already exists
    if (file_exists($filePath)) {
        return;
    }
    
    // Analyze operations for this subpath
    $operations = analyzePathOperations($paths, $subresource);
    
    // Determine model name and response type
    $modelName = ucfirst($subresource);
    if (substr($modelName, -1) === 's' && $modelName !== 'News') {
        $singularModel = substr($modelName, 0, -1);
    } else {
        $singularModel = $modelName;
    }
    
    // Escape reserved keywords
    $singularModel = escapeReservedKeyword($singularModel);
    
    // Find nested subpaths for this builder (e.g., /authentication/emailMethods)
    $nestedSubpaths = [];
    foreach ($paths as $path => $methods) {
        // Look for paths that have more segments after this subresource
        // e.g., if subresource is "authentication", look for "authentication/emailMethods"
        if (preg_match("#/{$subresource}/([^/\{]+)#", $path, $matches)) {
            $nestedResource = $matches[1];
            
            // Skip invalid characters
            if (preg_match('/[^a-zA-Z0-9_-]/', $nestedResource)) {
                continue;
            }
            
            // Normalize the name
            $normalizedNested = preg_replace('/^microsoft\.graph\./', '', $nestedResource);
            $normalizedNested = str_replace('.', '_', $normalizedNested);
            
            if (!isset($nestedSubpaths[$normalizedNested])) {
                $nestedSubpaths[$normalizedNested] = [];
            }
        }
    }
    
    // Generate the builder with navigation methods
    $code = generateRequestBuilderClassWithSubpaths($subresource, $className, $operations, $nestedSubpaths);
    file_put_contents($filePath, $code);
    
    $output->writeln("<comment>    Generated subpath: {$className}</comment>");
    
    // Also generate ItemRequestBuilder if this is a collection
    if ($operations['isCollection']) {
        generateItemRequestBuilder($subresource, $operations, $paths, $dir, $output);
    }
}

/**
 * Generate request builder class with subpath navigation methods
 */
function generateRequestBuilderClassWithSubpaths(string $namespace, string $className, array $operations, array $nestedSubpaths): string
{
    // First generate the base class
    $code = generateRequestBuilderClass($namespace, $className, $operations);
    
    // If there are nested subpaths, add navigation methods before the closing brace
    if (!empty($nestedSubpaths)) {
        // Remove the closing brace and any trailing whitespace
        $code = rtrim($code);
        if (str_ends_with($code, '}')) {
            $code = substr($code, 0, -1);
            $code = rtrim($code) . "\n";
        }
        
        // Add navigation methods for nested subpaths
        foreach ($nestedSubpaths as $subresource => $data) {
            $code .= generateSubpathMethod($subresource);
        }
        
        $code .= "}\n";
    }
    
    return $code;
}

/**
 * Extract model definitions from paths
 */
function extractModelsFromPaths(array $paths, array $schemas): array
{
    $models = [];
    
    foreach ($paths as $path => $methods) {
        foreach ($methods as $method => $operation) {
            if (!is_array($operation)) {
                continue;
            }
            
            // Extract from responses
            $responses = $operation['responses'] ?? [];
            foreach ($responses as $code => $response) {
                if (!is_array($response)) {
                    continue;
                }
                
                $content = $response['content'] ?? [];
                foreach ($content as $contentType => $contentData) {
                    $schema = $contentData['schema'] ?? null;
                    if ($schema) {
                        $modelName = extractModelNameFromSchema($schema);
                        if ($modelName && !isset($models[$modelName])) {
                            $models[$modelName] = extractModelDefinition($modelName, $schema, $schemas);
                        }
                    }
                }
            }
            
            // Extract from request body
            $requestBody = $operation['requestBody'] ?? null;
            if ($requestBody) {
                $content = $requestBody['content'] ?? [];
                foreach ($content as $contentType => $contentData) {
                    $schema = $contentData['schema'] ?? null;
                    if ($schema) {
                        $modelName = extractModelNameFromSchema($schema);
                        if ($modelName && !isset($models[$modelName])) {
                            $models[$modelName] = extractModelDefinition($modelName, $schema, $schemas);
                        }
                    }
                }
            }
        }
    }
    
    return $models;
}

/**
 * Extract model name from schema reference
 */
function extractModelNameFromSchema(array $schema): ?string
{
    if (isset($schema['$ref'])) {
        $ref = $schema['$ref'];
        if (preg_match('#/schemas/(.+)$#', $ref, $matches)) {
            return normalizeModelName($matches[1]);
        }
    }
    
    if (isset($schema['allOf'])) {
        foreach ($schema['allOf'] as $subSchema) {
            $name = extractModelNameFromSchema($subSchema);
            if ($name) {
                return $name;
            }
        }
    }
    
    return null;
}

/**
 * Extract model definition
 */
function extractModelDefinition(string $modelName, array $schema, array $allSchemas): array
{
    $definition = [
        'properties' => [],
    ];
    
    // Try to get from schemas
    if (isset($allSchemas[$modelName])) {
        $schemaData = $allSchemas[$modelName];
        $properties = [];
        
        // Handle allOf schemas (merge all properties)
        if (isset($schemaData['allOf'])) {
            foreach ($schemaData['allOf'] as $subSchema) {
                if (isset($subSchema['properties'])) {
                    $properties = array_merge($properties, $subSchema['properties']);
                }
                // Check for inheritance
                if (isset($subSchema['$ref'])) {
                    $parentName = extractModelNameFromSchema($subSchema);
                    if ($parentName) {
                        $definition['extends'] = $parentName;
                    }
                }
            }
        } else {
            $properties = $schemaData['properties'] ?? [];
        }
        
        foreach ($properties as $propName => $propDef) {
            $type = mapOpenApiTypeToPhp($propDef);
            $definition['properties'][$propName] = [
                'type' => $type,
                'description' => $propDef['description'] ?? '',
            ];
        }
    }
    
    return $definition;
}

/**
 * Map OpenAPI type to PHP type
 */
function mapOpenApiTypeToPhp(array $propDef): string
{
    $type = $propDef['type'] ?? 'string';
    $format = $propDef['format'] ?? null;
    $nullable = $propDef['nullable'] ?? false;
    $prefix = $nullable ? '?' : '';
    
    if (isset($propDef['$ref'])) {
        $modelName = extractModelNameFromSchema($propDef);
        return $prefix . ($modelName ?? 'mixed');
    }
    
    if ($type === 'array') {
        return 'array';
    }
    
    if ($type === 'object') {
        return $prefix . 'array';
    }
    
    if ($type === 'integer') {
        return $prefix . 'int';
    }
    
    if ($type === 'number') {
        return $prefix . 'float';
    }
    
    if ($type === 'boolean') {
        return $prefix . 'bool';
    }
    
    if ($type === 'string') {
        if ($format === 'date-time') {
            return $prefix . '\DateTimeInterface';
        }
        if ($format === 'date') {
            return $prefix . '\DateTimeInterface';
        }
        if ($format === 'binary') {
            return $prefix . 'string';
        }
        return $prefix . 'string';
    }
    
    return $prefix . 'mixed';
}

/**
 * Generate model from definition
 */
function generateModelFromDefinition(string $dir, string $name, array $definition): void
{
    $filePath = $dir . "/{$name}.php";
    
    // Skip if already exists
    if (file_exists($filePath)) {
        return;
    }
    
    $extends = $definition['extends'] ?? null;
    $isAbstract = $definition['abstract'] ?? false;
    $properties = $definition['properties'] ?? [];
    
    if (empty($properties) && !$extends) {
        // Skip empty models
        return;
    }
    
    // Note: This function generates models with extends/abstract support
    // which is not currently supported by the Model.php.template
    // For now, keeping the inline generation for these special cases
    // TODO: Extend Model.php.template to support extends and abstract
    
    $extendsClause = $extends ? " extends {$extends}" : '';
    $abstractKeyword = $isAbstract ? 'abstract ' : '';
    
    $code = "<?php\n\ndeclare(strict_types=1);\n\nnamespace ApeDevDe\\MicrosoftGraphSdk\\Models;\n\n";
    $code .= "/**\n * {$name}\n */\n";
    $code .= "{$abstractKeyword}class {$name}{$extendsClause}\n{\n";
    
    // Generate properties
    foreach ($properties as $propName => $propDef) {
        $type = $propDef['type'];
        $description = $propDef['description'] ?? '';
        
        $code .= "    /**\n";
        if ($description) {
            $code .= "     * {$description}\n";
        }
        $code .= "     */\n";
        $code .= "    private {$type} \${$propName}";
        
        if ($type === 'array') {
            $code .= " = []";
        }
        
        $code .= ";\n\n";
    }
    
    // Generate getters and setters
    foreach ($properties as $propName => $propDef) {
        $type = $propDef['type'];
        $methodName = ucfirst($propName);
        
        $code .= "    public function get{$methodName}(): {$type}\n";
        $code .= "    {\n";
        $code .= "        return \$this->{$propName};\n";
        $code .= "    }\n\n";
        
        $code .= "    public function set{$methodName}({$type} \${$propName}): self\n";
        $code .= "    {\n";
        $code .= "        \$this->{$propName} = \${$propName};\n";
        $code .= "        return \$this;\n";
        $code .= "    }\n\n";
    }
    
    $code .= "}\n";
    
    file_put_contents($filePath, $code);
}

/**
 * Generate request builders for namespace
 */
function generateRequestBuildersForNamespace(string $namespace, array $paths, $output): void
{
    $builderDir = BUILD_DIR . '/RequestBuilders';
    $className = ucfirst($namespace) . 'RequestBuilder';
    $filePath = $builderDir . "/{$className}.php";
    
    // Skip BaseRequestBuilder - it's in src/
    if ($className === 'BaseRequestBuilder') {
        return;
    }
    
    // Skip workbook functions namespace (contains Excel function endpoints without models)
    if ($namespace === 'functions' || $className === 'FunctionsRequestBuilder') {
        return;
    }
    
    // Skip if already exists
    if (file_exists($filePath)) {
        return;
    }
    
    // Analyze paths to determine operations
    $operations = analyzePathOperations($paths, $namespace);
    
    if (empty($operations)) {
        return;
    }
    
    $code = generateRequestBuilderClass($namespace, $className, $operations);
    file_put_contents($filePath, $code);
    
    $output->writeln("<comment>    Generated: {$className}</comment>");
    
    // Always generate Item Request Builder for collections
    generateItemRequestBuilder($namespace, $operations, $paths, $builderDir, $output);
    
    // Collection response model is now generated globally from schemas
}

/**
 * Analyze path operations
 */
function analyzePathOperations(array $paths, string $namespace = ''): array
{
    $operations = [
        'hasGet' => false,
        'hasPost' => false,
        'hasPatch' => false,
        'hasDelete' => false,
        'hasList' => false,
        'hasById' => false,
        'supportsSelect' => false,
        'supportsFilter' => false,
        'supportsOrderBy' => false,
        'supportsTop' => false,
        'supportsSkip' => false,
        'supportsExpand' => false,
        'supportsSearch' => false,
        'supportsCount' => false,
        'getResponseSchema' => null,
        'isCollection' => false,
    ];
    
    // Find the root path (shortest path without parameters) to determine the primary response type
    $rootPath = null;
    $shortestLength = PHP_INT_MAX;
    
    foreach ($paths as $path => $methods) {
        // Count path segments
        $segments = substr_count($path, '/');
        if ($segments < $shortestLength) {
            $shortestLength = $segments;
            $rootPath = $path;
        }
    }
    
    foreach ($paths as $path => $methods) {
        // Check if it's a collection endpoint
        if (!preg_match('/\{[^}]+\}/', $path)) {
            $operations['hasList'] = true;
        } else {
            $operations['hasById'] = true;
            // Store the path for extracting singular name from parameter
            // Prefer paths that end with /{namespace}/{id} pattern
            $pattern = '#/' . preg_quote($namespace, '#') . '/\{[^}]+-id\}' . '$#';
            if (!isset($operations['byIdPath']) || preg_match($pattern, $path)) {
                $operations['byIdPath'] = $path;
            }
        }
        
        foreach ($methods as $method => $operation) {
            if (!is_array($operation)) {
                continue;
            }
            
            $method = strtolower($method);
            if ($method === 'get') {
                $operations['hasGet'] = true;
                
                // Extract response schema (prioritize root path)
                if ($path === $rootPath || $operations['getResponseSchema'] === null) {
                    $responses = $operation['responses'] ?? [];
                    foreach (['2XX', '200', 'default'] as $responseCode) {
                        $responseData = $responses[$responseCode] ?? null;
                        
                        if (!$responseData) {
                            continue;
                        }
                        
                        // Check for direct schema reference
                        if (isset($responseData['content']['application/json']['schema']['$ref'])) {
                            $ref = $responseData['content']['application/json']['schema']['$ref'];
                            // Extract schema name from #/components/schemas/microsoft.graph.user
                            if (preg_match('#/schemas/microsoft\.graph\.(.+)$#', $ref, $matches)) {
                                $operations['getResponseSchema'] = $matches[1];
                                
                                // Check if it's a collection response
                                if (str_contains($matches[1], 'Collection')) {
                                    $operations['isCollection'] = true;
                                } else {
                                    $operations['isCollection'] = false;
                                }
                            }
                            break;
                        }
                        
                        // Check for response reference (e.g., #/components/responses/microsoft.graph.userCollectionResponse)
                        if (isset($responseData['$ref'])) {
                            $ref = $responseData['$ref'];
                            // Extract from #/components/responses/microsoft.graph.userCollectionResponse
                            if (preg_match('#/responses/microsoft\.graph\.(.+)$#', $ref, $matches)) {
                                $operations['getResponseSchema'] = $matches[1];
                                
                                // Check if it's a collection response
                                if (str_contains(strtolower($matches[1]), 'collection')) {
                                    $operations['isCollection'] = true;
                                } else {
                                    $operations['isCollection'] = false;
                                }
                            }
                            break;
                        }
                    }
                }
                
                // Check for query parameters
                $parameters = $operation['parameters'] ?? [];
                foreach ($parameters as $param) {
                    if (!is_array($param)) {
                        continue;
                    }
                    
                    // Check for direct parameter name
                    $paramName = $param['name'] ?? '';
                    if ($paramName === '$select') $operations['supportsSelect'] = true;
                    if ($paramName === '$filter') $operations['supportsFilter'] = true;
                    if ($paramName === '$orderby') $operations['supportsOrderBy'] = true;
                    if ($paramName === '$top') $operations['supportsTop'] = true;
                    if ($paramName === '$skip') $operations['supportsSkip'] = true;
                    if ($paramName === '$expand') $operations['supportsExpand'] = true;
                    if ($paramName === '$search') $operations['supportsSearch'] = true;
                    if ($paramName === '$count') $operations['supportsCount'] = true;
                    
                    // Check for parameter references
                    if (isset($param['$ref'])) {
                        $ref = $param['$ref'];
                        if (str_contains($ref, '/parameters/select')) $operations['supportsSelect'] = true;
                        if (str_contains($ref, '/parameters/filter')) $operations['supportsFilter'] = true;
                        if (str_contains($ref, '/parameters/orderby')) $operations['supportsOrderBy'] = true;
                        if (str_contains($ref, '/parameters/top')) $operations['supportsTop'] = true;
                        if (str_contains($ref, '/parameters/skip')) $operations['supportsSkip'] = true;
                        if (str_contains($ref, '/parameters/expand')) $operations['supportsExpand'] = true;
                        if (str_contains($ref, '/parameters/search')) $operations['supportsSearch'] = true;
                        if (str_contains($ref, '/parameters/count')) $operations['supportsCount'] = true;
                    }
                }
            } elseif ($method === 'post') {
                $operations['hasPost'] = true;
            } elseif ($method === 'patch') {
                $operations['hasPatch'] = true;
            } elseif ($method === 'delete') {
                $operations['hasDelete'] = true;
            }
        }
    }
    
    return $operations;
}

/**
 * Generate request builder class code
 */
function generateRequestBuilderClass(string $namespace, string $className, array $operations): string
{
    // Determine actual response model from OpenAPI schema
    $responseSchema = $operations['getResponseSchema'] ?? null;
    $isCollection = $operations['isCollection'] ?? false;
    
    // Fallback to heuristic if no schema found
    if (!$responseSchema) {
        $modelName = ucfirst($namespace);
        if (substr($modelName, -1) === 's' && $modelName !== 'News') {
            $singularModel = substr($modelName, 0, -1);
        } else {
            $singularModel = $modelName;
        }
        $responseModel = $isCollection ? "{$singularModel}CollectionResponse" : $singularModel;
    } else {
        // Use the actual schema name from OpenAPI and normalize it
        $responseModel = normalizeModelName($responseSchema);
        $responseModel = ucfirst($responseModel);
        
        // Extract singular model name
        if ($isCollection && str_ends_with($responseModel, 'CollectionResponse')) {
            $singularModel = substr($responseModel, 0, -strlen('CollectionResponse'));
        } else {
            $singularModel = $responseModel;
        }
    }
    
    // Escape reserved keywords for model references
    $singularModel = escapeReservedKeyword($singularModel);
    $responseModel = escapeReservedKeyword($responseModel);
    
    // QueryOptions use escaped model names (they're generated from model files)
    $queryOptionsClass = "{$singularModel}QueryOptions";
    
    // CollectionResponse always uses escaped singular model name
    $collectionResponse = "{$singularModel}CollectionResponse";
    
    $code = <<<PHP
<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;

PHP;

    // Only import singular model if it exists (for POST/GET methods)
    // Use the response model (singularModel), not path-based extraction
    $escapedSingularModel = escapeReservedKeyword($singularModel);
    $modelFile = BUILD_DIR . "/Models/{$escapedSingularModel}.php";
    $modelExists = file_exists($modelFile);
    
    // Extract the actual singular name from path (for byId accuracy)
    // This might be different from the response model
    $byIdSingularModel = $singularModel;
    if ($isCollection && isset($operations['byIdPath'])) {
        $path = $operations['byIdPath'];
        if (preg_match('/\{([^}]+)-id\}[^{]*$/', $path, $matches)) {
            $byIdSingularModel = ucfirst($matches[1]);
        }
    }
    
    // Check if byId model exists (might be different from response model)
    $escapedByIdModel = escapeReservedKeyword($byIdSingularModel);
    $byIdModelFile = BUILD_DIR . "/Models/{$escapedByIdModel}.php";
    $byIdModelExists = file_exists($byIdModelFile);
    
    if ($modelExists) {
        $code .= "use ApeDevDe\MicrosoftGraphSdk\Models\\{$escapedSingularModel};\n";
    }

    // Only include collection response if it's actually a collection
    if ($isCollection) {
        $code .= "use ApeDevDe\MicrosoftGraphSdk\Models\\{$collectionResponse};\n";
    }
    
    // Only import QueryOptions if model exists (QueryOptions are generated for models)
    if ($modelExists) {
        $code .= "use ApeDevDe\MicrosoftGraphSdk\QueryOptions\\{$queryOptionsClass};\n";
    }
    
    $code .= "\n";
    
    $code .= <<<PHP
/**
 * Request builder for {$singularModel}
 */
class {$className} extends BaseRequestBuilder
{

PHP;
    
    // Add get method (only if model exists)
    if (($operations['hasList'] || $operations['hasGet']) && $modelExists) {
        $returnType = $isCollection ? $collectionResponse : $singularModel;
        $code .= generateGetMethod($operations, $returnType, $singularModel, $isCollection);
    }
    
    // Add post method (only if model exists)
    if ($operations['hasPost'] && $modelExists) {
        $code .= generatePostMethod($singularModel);
    }
    
    // Add byId method (only for collections where the byId model exists)
    if ($isCollection && $byIdModelExists) {
        $code .= generateByIdMethod($namespace, $byIdSingularModel, $operations);
    }
    
    // Add count method if supported
    if ($operations['supportsCount'] && $isCollection) {
        $code .= generateCountMethod();
    }
    
    $code .= "}\n";
    
    return $code;
}

/**
 * Generate GET method with query support
 */
function generateGetMethod(array $operations, string $returnType, string $modelName, bool $isCollection = true): string
{
    $queryOptionsClass = "{$modelName}QueryOptions";
    $methodDescription = $isCollection ? 'Get collection with optional query parameters' : 'Get the resource';
    
    return renderTemplate('GetMethod.php', [
        'methodDescription' => $methodDescription,
        'isCollection' => $isCollection,
        'operations' => $operations,
        'queryOptionsClass' => $queryOptionsClass,
        'returnType' => $returnType
    ]) . "\n";
}

/**
 * Generate POST method
 */
function generatePostMethod(string $modelName): string
{
    $escapedModelName = escapeReservedKeyword($modelName);
    
    return renderTemplate('PostMethod.php', [
        'modelName' => $escapedModelName
    ]) . "\n";
}

/**
 * Generate byId method
 */
function generateByIdMethod(string $namespace, string $modelName, array $operations): string
{
    // Try to extract singular name from path parameter
    // e.g., /contentActivities/{contentActivity-id} -> ContentActivity
    $singularNamespace = null;
    if (isset($operations['byIdPath'])) {
        $path = $operations['byIdPath'];
        // Extract the LAST parameter in the path (the one for this collection)
        if (preg_match('/\{([^}]+)-id\}[^{]*$/', $path, $matches)) {
            $singularNamespace = ucfirst($matches[1]);
        }
    }
    
    // Fallback to simple singularization if no path found
    if (!$singularNamespace) {
        $normalizedNamespace = ucfirst($namespace);
        if (substr($normalizedNamespace, -1) === 's' && $normalizedNamespace !== 'News') {
            $singularNamespace = substr($normalizedNamespace, 0, -1);
        } else {
            $singularNamespace = $normalizedNamespace;
        }
    }
    
    $itemBuilderClass = $singularNamespace . 'ItemRequestBuilder';
    
    return renderTemplate('ByIdMethod.php', [
        'itemBuilderClass' => $itemBuilderClass
    ]) . "\n";
}

/**
 * Generate count method
 */
function generateCountMethod(): string
{
    return renderTemplate('CountMethod.php', []) . "\n";
}

// Base classes and authentication are now in generator-functions.php

/**
 * Generate Item Request Builder
 */
function generateItemRequestBuilder(string $namespace, array $operations, array $paths, string $dir, $output): void
{
    // Extract singular name from path parameter (same logic as byId method)
    $singularNamespace = null;
    if (isset($operations['byIdPath'])) {
        $path = $operations['byIdPath'];
        // Extract the LAST parameter in the path
        if (preg_match('/\{([^}]+)-id\}[^{]*$/', $path, $matches)) {
            $singularNamespace = ucfirst($matches[1]);
        }
    }
    
    // Fallback to simple singularization if no path found
    if (!$singularNamespace) {
        $normalizedNamespace = ucfirst($namespace);
        if (substr($normalizedNamespace, -1) === 's' && $normalizedNamespace !== 'News') {
            $singularNamespace = substr($normalizedNamespace, 0, -1);
        } else {
            $singularNamespace = $normalizedNamespace;
        }
    }
    
    $className = $singularNamespace . 'ItemRequestBuilder';
    $modelName = $singularNamespace;
    $escapedModelName = escapeReservedKeyword($modelName);
    $filePath = $dir . "/{$className}.php";
    
    // Skip if already exists
    if (file_exists($filePath)) {
        return;
    }
    
    // Skip if model doesn't exist (e.g., virtual collections, navigation properties)
    $modelFile = BUILD_DIR . "/Models/{$escapedModelName}.php";
    if (!file_exists($modelFile)) {
        return;
    }
    
    // Find subpaths (e.g., /users/{user-id}/activities)
    $subpaths = [];
    $itemPathPattern = "/{$namespace}/{"; // e.g., /users/{
    
    foreach ($paths as $path => $methods) {
        // Check if this is a subpath of the item (e.g., /users/{user-id}/activities)
        if (preg_match("#^{$itemPathPattern}[^/]+}/([^/\{]+)#", $path, $matches)) {
            $subresource = $matches[1];
            if (!isset($subpaths[$subresource])) {
                $subpaths[$subresource] = [];
            }
            $subpaths[$subresource][$path] = $methods;
        }
    }
    
    $code = <<<PHP
<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\\{$escapedModelName};

/**
 * Request builder for individual {$modelName} item
 */
class {$className} extends BaseRequestBuilder
{

PHP;
    
    // Add GET method
    if ($operations['hasGet'] || $operations['hasById']) {
        $code .= generateGetItemMethod($modelName, $operations);
    }
    
    // Add PATCH method
    if ($operations['hasPatch']) {
        $code .= generatePatchMethod($modelName);
    }
    
    // Add DELETE method
    if ($operations['hasDelete']) {
        $code .= generateDeleteMethod();
    }
    
    // Add subpath navigation methods
    foreach ($subpaths as $subresource => $subpathData) {
        $code .= generateSubpathMethod($subresource);
    }
    
    $code .= "}\n";
    
    file_put_contents($filePath, $code);
    $output->writeln("<comment>    Generated: {$className}</comment>");
}

/**
 * Generate subpath navigation method
 */
function generateSubpathMethod(string $subresource): string
{
    // Skip if subresource contains invalid characters for method names
    if (preg_match('/[^a-zA-Z0-9_]/', $subresource)) {
        return ""; // Skip invalid method names
    }
    
    // Skip workbook functions (Excel function endpoints without models)
    if ($subresource === 'functions') {
        return "";
    }
    
    $methodName = lcfirst($subresource);
    $builderClass = ucfirst($subresource) . 'RequestBuilder';
    
    return renderTemplate('SubpathMethod.php', [
        'subresource' => $subresource,
        'methodName' => $methodName,
        'builderClass' => $builderClass
    ]) . "\n";
}

/**
 * Generate GET item method
 */
function generateGetItemMethod(string $modelName, array $operations): string
{
    $escapedModelName = escapeReservedKeyword($modelName);
    
    return renderTemplate('GetItemMethod.php', [
        'modelName' => $escapedModelName
    ]) . "\n";
}

/**
 * Generate PATCH method
 */
function generatePatchMethod(string $modelName): string
{
    $escapedModelName = escapeReservedKeyword($modelName);
    
    return renderTemplate('PatchMethod.php', [
        'modelName' => $escapedModelName
    ]) . "\n";
}

/**
 * Generate DELETE method
 */
function generateDeleteMethod(): string
{
    return renderTemplate('DeleteMethod.php', []) . "\n";
}

/**
 * Generate collection response model (called from request builder generation)
 */
function generateCollectionModel(string $namespace, $output): void
{
    // Normalize model name
    $normalizedNamespace = ucfirst($namespace);
    if (substr($normalizedNamespace, -1) === 's' && $normalizedNamespace !== 'News') {
        $singularModel = substr($normalizedNamespace, 0, -1);
    } else {
        $singularModel = $normalizedNamespace;
    }
    
    $collectionName = "{$singularModel}CollectionResponse";
    $modelsDir = BUILD_DIR . '/Models';
    $filePath = $modelsDir . "/{$collectionName}.php";
    
    // Skip if already exists
    if (file_exists($filePath)) {
        return;
    }
    
    // Use template
    $code = generateCollectionResponseCode($collectionName, $singularModel);
    file_put_contents($filePath, $code);
}

/**
 * Generate root request builder
 */
function generateRootRequestBuilder(string $buildDir, array $rootNamespaces): void
{
    $builderDir = $buildDir . '/RequestBuilders';
    
    // Only include root namespaces (not subpaths)
    $namespaces = [];
    foreach ($rootNamespaces as $namespace) {
        $className = ucfirst($namespace) . 'RequestBuilder';
        $filePath = $builderDir . '/' . $className . '.php';
        
        if (file_exists($filePath)) {
            $namespaces[$namespace] = $className;
        }
    }
    
    // Generate GraphRequestBuilder using template
    $code = renderTemplate('GraphRequestBuilder.php.template', [
        'NAMESPACES' => $namespaces
    ]);
    
    file_put_contents($builderDir . '/GraphRequestBuilder.php', $code);
}
