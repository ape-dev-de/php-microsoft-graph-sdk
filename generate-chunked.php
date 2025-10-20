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

// Step 5.5: Copy base QueryOptions class
$output->writeln('<info>Copying base QueryOptions class...</info>');
copyBaseQueryOptions();

// Step 5.6: Generate QueryOptions classes
$output->writeln('<info>Generating QueryOptions classes...</info>');
generateAllQueryOptions($schemas, $output);

// Step 6: Chunk paths by namespace
$output->writeln('<info>Analyzing and chunking API paths...</info>');
$namespaceCount = analyzeAndChunkOpenApi($output);
$output->writeln("<info>✓ Created {$namespaceCount} namespace chunks</info>");

// Step 7: Process namespace chunks and generate request builders
$output->writeln('<info>Processing namespace chunks...</info>');
processNamespaceChunks($output);

// Step 8: Generate base classes
$output->writeln('<info>Generating base classes...</info>');
generateBaseClasses(BUILD_DIR);
generateAuthenticationLayer(BUILD_DIR);
$output->writeln('<info>✓ Base classes generated</info>');

// Step 9: Generate root request builder
$output->writeln('<info>Generating root request builder...</info>');
generateRootRequestBuilder(BUILD_DIR);
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
                if ($lineDepth <= $depth && !preg_match('/^\s+type:/', $line) && !preg_match('/^\s+format:/', $line) && !preg_match('/^\s+description:/', $line)) {
                    $inProperties = false;
                    $currentProperty = null;
                }
            }
            
            // New property (depth + 2 spaces)
            if (preg_match('/^' . str_repeat(' ', $depth + 2) . '([a-zA-Z0-9_@]+):\s*$/', $line, $matches)) {
                $currentProperty = $matches[1];
                $schema['properties'][$currentProperty] = ['type' => 'string'];
            } elseif ($currentProperty && preg_match('/^\s+type:\s*(.+)$/', $line, $matches)) {
                $schema['properties'][$currentProperty]['type'] = trim($matches[1]);
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
        
        if (empty($schemaData['properties'])) {
            continue;
        }
        
        $filePath = $modelsDir . "/{$modelName}.php";
        if (file_exists($filePath)) {
            continue;
        }
        
        // Generate model
        $code = generateModelCode($modelName, $schemaData['properties']);
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
    $propertiesCode = '';
    $gettersSettersCode = '';
    
    // Properties
    foreach ($properties as $propName => $propDef) {
        $type = mapPropertyType($propDef);
        $description = $propDef['description'] ?? '';
        
        $propertiesCode .= "    /**\n";
        if ($description) {
            $propertiesCode .= "     * {$description}\n";
        }
        $propertiesCode .= "     */\n";
        $propertiesCode .= "    private {$type} \${$propName}";
        
        if ($type === 'array') {
            $propertiesCode .= " = []";
        }
        
        $propertiesCode .= ";\n\n";
    }
    
    // Getters and setters
    foreach ($properties as $propName => $propDef) {
        $type = mapPropertyType($propDef);
        $methodName = ucfirst($propName);
        
        $gettersSettersCode .= "    public function get{$methodName}(): {$type}\n";
        $gettersSettersCode .= "    {\n";
        $gettersSettersCode .= "        return \$this->{$propName};\n";
        $gettersSettersCode .= "    }\n\n";
        
        $gettersSettersCode .= "    public function set{$methodName}({$type} \${$propName}): self\n";
        $gettersSettersCode .= "    {\n";
        $gettersSettersCode .= "        \$this->{$propName} = \${$propName};\n";
        $gettersSettersCode .= "        return \$this;\n";
        $gettersSettersCode .= "    }\n\n";
    }
    
    $template = loadTemplate('Model.php.template');
    
    return str_replace(
        ['{{MODEL_NAME}}', '{{PROPERTIES}}', '{{GETTERS_SETTERS}}'],
        [$modelName, rtrim($propertiesCode), rtrim($gettersSettersCode)],
        $template
    );
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
    
    foreach ($schemas as $schemaName => $schemaData) {
        if (empty($schemaData['properties'])) {
            continue;
        }
        
        $modelName = normalizeModelName($schemaName);
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
 * Load template file
 */
function loadTemplate(string $templateName): string
{
    $templateFile = __DIR__ . '/templates/' . $templateName;
    
    if (!file_exists($templateFile)) {
        throw new Exception("Template file not found: {$templateFile}");
    }
    
    return file_get_contents($templateFile);
}

/**
 * Generate collection response code
 */
function generateCollectionResponseCode(string $collectionName, string $modelName): string
{
    $template = loadTemplate('CollectionResponse.php.template');
    
    return str_replace(
        ['{{COLLECTION_NAME}}', '{{MODEL_NAME}}'],
        [$collectionName, $modelName],
        $template
    );
    
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
    
    $generated = 0;
    
    foreach ($schemas as $schemaName => $schemaData) {
        if (empty($schemaData['properties'])) {
            continue;
        }
        
        $modelName = normalizeModelName($schemaName);
        $className = "{$modelName}QueryOptions";
        $filePath = $queryOptionsDir . "/{$className}.php";
        
        if (file_exists($filePath)) {
            continue;
        }
        
        $code = generateQueryOptionsCode($modelName, $schemaData['properties']);
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
    
    // Generate field constants
    $constants = '';
    $selectDoc = " * Available select fields:\n";
    
    foreach ($properties as $propName => $propDef) {
        $constantName = 'FIELD_' . strtoupper(preg_replace('/([a-z])([A-Z])/', '$1_$2', $propName));
        $constants .= "    public const {$constantName} = '{$propName}';\n";
        $selectDoc .= " * - {$propName}\n";
    }
    
    $template = loadTemplate('ModelQueryOptions.php.template');
    
    return str_replace(
        ['{{CLASS_NAME}}', '{{MODEL_NAME}}', '{{SELECT_DOC}}', '{{CONSTANTS}}'],
        [$className, $modelName, $selectDoc, $constants],
        $template
    );
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
function processNamespaceChunks($output): void
{
    $chunkFiles = glob(TMP_DIR . '/paths_*.yaml');
    $schemasFile = TMP_DIR . '/schemas.yaml';
    
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
        
        $output->writeln("<comment>  - Processing: {$namespace}</comment>");
        
        try {
            processNamespace($namespace, $chunkFile, $schemas, $output);
        } catch (Exception $e) {
            $output->writeln("<error>    Error processing {$namespace}: " . $e->getMessage() . "</error>");
        }
        
        // Free memory
        gc_collect_cycles();
    }
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
    
    // Generate request builders
    generateRequestBuildersForNamespace($namespace, $paths, $output);
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
        $properties = $schemaData['properties'] ?? [];
        
        foreach ($properties as $propName => $propDef) {
            $type = mapOpenApiTypeToPhp($propDef);
            $definition['properties'][$propName] = [
                'type' => $type,
                'description' => $propDef['description'] ?? '',
            ];
        }
        
        // Check for inheritance
        if (isset($schemaData['allOf'])) {
            foreach ($schemaData['allOf'] as $subSchema) {
                if (isset($subSchema['$ref'])) {
                    $parentName = extractModelNameFromSchema($subSchema);
                    if ($parentName) {
                        $definition['extends'] = $parentName;
                    }
                }
            }
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
    
    // Skip if already exists
    if (file_exists($filePath)) {
        return;
    }
    
    // Analyze paths to determine operations
    $operations = analyzePathOperations($paths);
    
    if (empty($operations)) {
        return;
    }
    
    $code = generateRequestBuilderClass($namespace, $className, $operations);
    file_put_contents($filePath, $code);
    
    $output->writeln("<comment>    Generated: {$className}</comment>");
    
    // Always generate Item Request Builder for collections
    generateItemRequestBuilder($namespace, $operations, $builderDir, $output);
    
    // Collection response model is now generated globally from schemas
}

/**
 * Analyze path operations
 */
function analyzePathOperations(array $paths): array
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
    ];
    
    foreach ($paths as $path => $methods) {
        // Check if it's a collection endpoint
        if (!preg_match('/\{[^}]+\}/', $path)) {
            $operations['hasList'] = true;
        } else {
            $operations['hasById'] = true;
        }
        
        foreach ($methods as $method => $operation) {
            if (!is_array($operation)) {
                continue;
            }
            
            $method = strtolower($method);
            if ($method === 'get') {
                $operations['hasGet'] = true;
                
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
    // Normalize model name (remove trailing 's' for singular)
    $modelName = ucfirst($namespace);
    if (substr($modelName, -1) === 's' && $modelName !== 'News') {
        $singularModel = substr($modelName, 0, -1);
    } else {
        $singularModel = $modelName;
    }
    
    $collectionResponse = "{$singularModel}CollectionResponse";
    $queryOptionsClass = "{$singularModel}QueryOptions";
    
    $code = <<<PHP
<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\\{$singularModel};
use ApeDevDe\MicrosoftGraphSdk\Models\\{$collectionResponse};
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\\{$queryOptionsClass};

/**
 * Request builder for {$singularModel} collection
 */
class {$className} extends BaseRequestBuilder
{

PHP;
    
    // Add get method for collections
    if ($operations['hasList'] || $operations['hasGet']) {
        $code .= generateGetMethod($operations, $collectionResponse, $singularModel);
    }
    
    // Add post method
    if ($operations['hasPost']) {
        $code .= generatePostMethod($singularModel);
    }
    
    // Add byId method (always add for collections)
    $code .= generateByIdMethod($namespace, $singularModel);
    
    // Add count method if supported
    if ($operations['supportsCount']) {
        $code .= generateCountMethod();
    }
    
    $code .= "}\n";
    
    return $code;
}

/**
 * Generate GET method with query support
 */
function generateGetMethod(array $operations, string $returnType, string $modelName): string
{
    $queryOptionsClass = "{$modelName}QueryOptions";
    
    $code = "    /**\n";
    $code .= "     * Get collection with optional query parameters\n";
    $code .= "     *\n";
    $code .= "     * You can use either:\n";
    $code .= "     * 1. Type-safe QueryOptions: get(options: (new {$queryOptionsClass}())->top(10)->select(['displayName', 'mail']))\n";
    $code .= "     * 2. Array parameters: get(queryParameters: ['\$top' => 10, '\$select' => 'displayName,mail'])\n";
    $code .= "     *\n";
    $code .= "     * Supported query parameters:\n";
    if ($operations['supportsSelect']) $code .= "     * - \$select: Select specific properties\n";
    if ($operations['supportsFilter']) $code .= "     * - \$filter: Filter results\n";
    if ($operations['supportsOrderBy']) $code .= "     * - \$orderby: Order results\n";
    if ($operations['supportsTop']) $code .= "     * - \$top: Limit number of results\n";
    if ($operations['supportsSkip']) $code .= "     * - \$skip: Skip number of results\n";
    if ($operations['supportsExpand']) $code .= "     * - \$expand: Expand related resources\n";
    if ($operations['supportsSearch']) $code .= "     * - \$search: Search query\n";
    if ($operations['supportsCount']) $code .= "     * - \$count: Include count of items\n";
    $code .= "     *\n";
    $code .= "     * @param {$queryOptionsClass}|null \$options Type-safe query options\n";
    $code .= "     * @param array|null \$queryParameters Raw query parameters (alternative to \$options)\n";
    $code .= "     * @return {$returnType}\n";
    $code .= "     */\n";
    $code .= "    public function get(?{$queryOptionsClass} \$options = null, ?array \$queryParameters = null): {$returnType}\n";
    $code .= "    {\n";
    $code .= "        \$params = \$options ? \$options->toArray() : (\$queryParameters ?? []);\n";
    $code .= "        \$response = \$this->client->get(\$this->getFullPath(), \$params);\n";
    $code .= "        return \$this->client->deserialize(\$response, {$returnType}::class);\n";
    $code .= "    }\n\n";
    
    return $code;
}

/**
 * Generate POST method
 */
function generatePostMethod(string $modelName): string
{
    $code = "    /**\n";
    $code .= "     * Create a new {$modelName}\n";
    $code .= "     *\n";
    $code .= "     * @param {$modelName} \$item The item to create\n";
    $code .= "     * @return {$modelName}\n";
    $code .= "     */\n";
    $code .= "    public function post({$modelName} \$item): {$modelName}\n";
    $code .= "    {\n";
    $code .= "        \$response = \$this->client->post(\$this->getFullPath(), \$item);\n";
    $code .= "        return \$this->client->deserialize(\$response, {$modelName}::class);\n";
    $code .= "    }\n\n";
    
    return $code;
}

/**
 * Generate byId method
 */
function generateByIdMethod(string $namespace, string $modelName): string
{
    // Normalize namespace for item builder
    $normalizedNamespace = ucfirst($namespace);
    if (substr($normalizedNamespace, -1) === 's' && $normalizedNamespace !== 'News') {
        $singularNamespace = substr($normalizedNamespace, 0, -1);
    } else {
        $singularNamespace = $normalizedNamespace;
    }
    
    $itemBuilderClass = $singularNamespace . 'ItemRequestBuilder';
    
    $code = "    /**\n";
    $code .= "     * Get request builder for specific item by ID\n";
    $code .= "     *\n";
    $code .= "     * @param string \$id The item ID\n";
    $code .= "     * @return {$itemBuilderClass}\n";
    $code .= "     */\n";
    $code .= "    public function byId(string \$id): {$itemBuilderClass}\n";
    $code .= "    {\n";
    $code .= "        return new {$itemBuilderClass}(\$this->client, \$this->buildPath(\$id));\n";
    $code .= "    }\n\n";
    
    return $code;
}

/**
 * Generate count method
 */
function generateCountMethod(): string
{
    $code = "    /**\n";
    $code .= "     * Get count of items in collection\n";
    $code .= "     *\n";
    $code .= "     * @return int\n";
    $code .= "     */\n";
    $code .= "    public function count(): int\n";
    $code .= "    {\n";
    $code .= "        \$response = \$this->client->get(\$this->buildPath('\$count'));\n";
    $code .= "        return (int) \$response->getBody()->getContents();\n";
    $code .= "    }\n\n";
    
    return $code;
}

// Base classes and authentication are now in generator-functions.php

/**
 * Generate Item Request Builder
 */
function generateItemRequestBuilder(string $namespace, array $operations, string $dir, $output): void
{
    // Normalize names
    $normalizedNamespace = ucfirst($namespace);
    if (substr($normalizedNamespace, -1) === 's' && $normalizedNamespace !== 'News') {
        $singularNamespace = substr($normalizedNamespace, 0, -1);
    } else {
        $singularNamespace = $normalizedNamespace;
    }
    
    $className = $singularNamespace . 'ItemRequestBuilder';
    $modelName = $singularNamespace;
    $filePath = $dir . "/{$className}.php";
    
    // Skip if already exists
    if (file_exists($filePath)) {
        return;
    }
    
    $code = <<<PHP
<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\\{$modelName};

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
    
    $code .= "}\n";
    
    file_put_contents($filePath, $code);
    $output->writeln("<comment>    Generated: {$className}</comment>");
}

/**
 * Generate GET item method
 */
function generateGetItemMethod(string $modelName, array $operations): string
{
    $code = "    /**\n";
    $code .= "     * Get {$modelName} item\n";
    $code .= "     *\n";
    if ($operations['supportsSelect'] || $operations['supportsExpand']) {
        $code .= "     * Supported query parameters:\n";
        if ($operations['supportsSelect']) $code .= "     * - \$select: Select specific properties\n";
        if ($operations['supportsExpand']) $code .= "     * - \$expand: Expand related resources\n";
        $code .= "     *\n";
    }
    $code .= "     * @param array|null \$queryParameters Query parameters\n";
    $code .= "     * @return {$modelName}\n";
    $code .= "     */\n";
    $code .= "    public function get(?array \$queryParameters = null): {$modelName}\n";
    $code .= "    {\n";
    $code .= "        \$response = \$this->client->get(\$this->getFullPath(), \$queryParameters);\n";
    $code .= "        return \$this->client->deserialize(\$response, {$modelName}::class);\n";
    $code .= "    }\n\n";
    
    return $code;
}

/**
 * Generate PATCH method
 */
function generatePatchMethod(string $modelName): string
{
    $code = "    /**\n";
    $code .= "     * Update {$modelName} item\n";
    $code .= "     *\n";
    $code .= "     * @param {$modelName} \$item The item with updated properties\n";
    $code .= "     * @return {$modelName}\n";
    $code .= "     */\n";
    $code .= "    public function patch({$modelName} \$item): {$modelName}\n";
    $code .= "    {\n";
    $code .= "        \$response = \$this->client->patch(\$this->getFullPath(), \$item);\n";
    $code .= "        return \$this->client->deserialize(\$response, {$modelName}::class);\n";
    $code .= "    }\n\n";
    
    return $code;
}

/**
 * Generate DELETE method
 */
function generateDeleteMethod(): string
{
    $code = "    /**\n";
    $code .= "     * Delete item\n";
    $code .= "     *\n";
    $code .= "     * @return void\n";
    $code .= "     */\n";
    $code .= "    public function delete(): void\n";
    $code .= "    {\n";
    $code .= "        \$this->client->delete(\$this->getFullPath());\n";
    $code .= "    }\n\n";
    
    return $code;
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
function generateRootRequestBuilder(string $buildDir): void
{
    $builderDir = $buildDir . '/RequestBuilders';
    
    // Scan for generated request builders
    $builders = glob($builderDir . '/*RequestBuilder.php');
    $namespaces = [];
    
    foreach ($builders as $builder) {
        $className = basename($builder, '.php');
        if ($className === 'BaseRequestBuilder' || $className === 'GraphRequestBuilder') {
            continue;
        }
        
        // Extract namespace from class name
        $namespace = lcfirst(str_replace(['RequestBuilder', 'ItemRequestBuilder'], '', $className));
        if (!empty($namespace) && !str_contains($namespace, 'Item')) {
            $namespaces[$namespace] = $className;
        }
    }
    
    // Generate GraphRequestBuilder
    $code = <<<'PHP'
<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;

class GraphRequestBuilder extends BaseRequestBuilder
{
    public function __construct(GraphClient $client)
    {
        parent::__construct($client, '');
    }


PHP;
    
    foreach ($namespaces as $namespace => $className) {
        $code .= "    public function {$namespace}(): {$className}\n";
        $code .= "    {\n";
        $code .= "        return new {$className}(\$this->client, '/{$namespace}');\n";
        $code .= "    }\n\n";
    }
    
    $code .= "}\n";
    
    file_put_contents($builderDir . '/GraphRequestBuilder.php', $code);
    
    // Generate BaseRequestBuilder if not exists
    if (!file_exists($builderDir . '/BaseRequestBuilder.php')) {
        $baseCode = <<<'PHP'
<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;

abstract class BaseRequestBuilder
{
    protected GraphClient $client;
    protected string $path;

    public function __construct(GraphClient $client, string $path = '')
    {
        $this->client = $client;
        $this->path = $path;
    }

    protected function getFullPath(): string
    {
        return $this->path;
    }

    protected function buildPath(string ...$segments): string
    {
        $path = $this->path;
        foreach ($segments as $segment) {
            $path .= '/' . ltrim($segment, '/');
        }
        return $path;
    }
}
PHP;
        file_put_contents($builderDir . '/BaseRequestBuilder.php', $baseCode);
    }
}
