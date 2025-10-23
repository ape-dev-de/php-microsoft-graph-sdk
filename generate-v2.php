<?php

declare(strict_types=1);

/**
 * Microsoft Graph SDK Generator - Memory-Efficient Chunked Processor
 * 
 * This script processes the Microsoft Graph OpenAPI specification in chunks
 * to avoid memory issues. It generates models and request builders per namespace.
 * 
 * YAML Parsing Strategy:
 * - Uses Symfony YAML parser for all schema parsing (parseSchemas, normalizeSchemaStructure)
 * - Extracts components section as YAML text, then parses it properly
 * - Line-by-line reading only for initial extraction to manage memory
 * - Eliminates complex regex patterns in favor of proper YAML parsing
 * 
 * Schema Support:
 * - Handles allOf (inheritance patterns)
 * - Handles anyOf (union types - prefers $ref types over generic objects)
 * - Handles $ref (direct references to other schemas)
 * - Filters out all @odata.* metadata properties (type, count, nextLink, etc.)
 * - Escapes PHP reserved keywords (e.g., 'list' becomes 'ListModel')
 */

require_once __DIR__ . '/vendor/autoload.php';

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


$output->writeln('<info>Analyzing and chunking API paths...</info>');
$namespaceCount = analyzeAndChunkOpenApi($output);
$output->writeln("<info>✓ Created {$namespaceCount} namespace chunks</info>");

// Step 4: Generate individual models from schemas
$output->writeln('<info>Generating individual models from schemas...</info>');
generateIndividualModels($schemas, $output);

// Step 5: Generate collection response models
$output->writeln('<info>Generating collection response models...</info>');
generateAllCollectionModels($schemas, $output);

$rootNamespaces = collectNamespaces();

// Load responses and parameters once
$output->writeln('<info>Loading responses from OpenAPI spec...</info>');
$allResponses = loadResponses();
$output->writeln('<info>✓ Loaded ' . count($allResponses) . ' response definitions</info>');

$output->writeln('<info>Loading parameters from OpenAPI spec...</info>');
$allParameters = loadParameters();
$output->writeln('<info>✓ Loaded ' . count($allParameters) . ' parameter definitions</info>');

// Process each namespace
foreach ($rootNamespaces as $namespace) {
    $output->writeln("<info>Processing namespace: {$namespace}</info>");
    
    // Build path tree
    $tree = collectPathesRecursive($namespace);
    
    // Collect request builder information
    $requestBuilders = [];
    foreach ($tree as $rootPath => $node) {
        $builderInfo = collectRequestBuildersRecursive($rootPath, $node, $allResponses, $allParameters);
        $requestBuilders[$rootPath] = $builderInfo;
    }
    
    // Generate request builder classes
    generateRequestBuilderClasses($namespace, $requestBuilders, $schemas, $output);
    
    $output->writeln("<info>✓ Completed namespace: {$namespace}</info>");
}

// Generate root request builder
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
 * Load responses from OpenAPI spec
 */
function loadResponses(): array
{
    $handle = fopen(OPENAPI_FILE, 'r');
    if (!$handle) {
        return [];
    }
    
    $inComponents = false;
    $inResponses = false;
    $responsesYaml = '';
    
    while (($line = fgets($handle)) !== false) {
        if (!$inComponents && trim($line) === 'components:') {
            $inComponents = true;
            continue;
        }
        
        if ($inComponents && !$inResponses && preg_match('/^  responses:/', $line)) {
            $inResponses = true;
            $responsesYaml = "responses:\n";
            continue;
        }
        
        if ($inResponses) {
            // Exit if we hit another top-level component section
            if (preg_match('/^  [a-zA-Z]/', $line) && !preg_match('/^    /', $line)) {
                break;
            }
            $responsesYaml .= $line;
        }
    }
    
    fclose($handle);
    
    if (empty($responsesYaml)) {
        return [];
    }
    
    try {
        $parsed = Yaml::parse($responsesYaml);
        return $parsed['responses'] ?? [];
    } catch (Exception $e) {
        return [];
    }
}

/**
 * Load parameters from OpenAPI spec
 */
function loadParameters(): array
{
    $handle = fopen(OPENAPI_FILE, 'r');
    if (!$handle) {
        return [];
    }
    
    $inComponents = false;
    $inParameters = false;
    $parametersYaml = '';
    
    while (($line = fgets($handle)) !== false) {
        if (!$inComponents && trim($line) === 'components:') {
            $inComponents = true;
            continue;
        }
        
        if ($inComponents && !$inParameters && preg_match('/^  parameters:/', $line)) {
            $inParameters = true;
            $parametersYaml = "parameters:\n";
            continue;
        }
        
        if ($inParameters) {
            // Exit if we hit another top-level component section
            if (preg_match('/^  [a-zA-Z]/', $line) && !preg_match('/^    /', $line)) {
                break;
            }
            $parametersYaml .= $line;
        }
    }
    
    fclose($handle);
    
    if (empty($parametersYaml)) {
        return [];
    }
    
    try {
        $parsed = Yaml::parse($parametersYaml);
        return $parsed['parameters'] ?? [];
    } catch (Exception $e) {
        return [];
    }
}

/**
 * Resolve return types from response definition
 */
function resolveReturnTypes(array $responses, array $allResponses): array
{
    $returnTypes = [];
    
    foreach ($responses as $statusCode => $response) {
        // Skip error responses
        if ($statusCode >= 400) {
            continue;
        }
        
        // Handle $ref in response
        if (isset($response['$ref'])) {
            $refName = basename($response['$ref']);
            if (isset($allResponses[$refName])) {
                $response = $allResponses[$refName];
            }
        }
        
        // Extract schema from content
        if (isset($response['content'])) {
            foreach ($response['content'] as $contentType => $contentData) {
                if (isset($contentData['schema'])) {
                    $types = resolveSchemaTypes($contentData['schema']);
                    $returnTypes = array_merge($returnTypes, $types);
                }
            }
        }
    }
    
    return array_unique($returnTypes);
}

/**
 * Resolve types from schema definition
 */
function resolveSchemaTypes(array $schema): array
{
    $types = [];
    
    // Handle direct $ref
    if (isset($schema['$ref'])) {
        $resolved = resolveSchemaReference($schema['$ref']);
        if ($resolved) {
            $types[] = $resolved;
        }
    }
    
    // Handle anyOf - collect all types and create union
    if (isset($schema['anyOf']) && is_array($schema['anyOf'])) {
        $anyOfTypes = [];
        $hasObjectWithProperties = false;
        $objectSchemas = [];
        
        foreach ($schema['anyOf'] as $index => $option) {
            // Check for $ref
            if (isset($option['$ref'])) {
                $resolved = resolveSchemaReference($option['$ref']);
                if ($resolved) {
                    $anyOfTypes[] = $resolved;
                }
            }
            // Check for nested anyOf/allOf
            else if (isset($option['anyOf']) || isset($option['allOf'])) {
                $resolved = resolveSchemaTypes($option);
                $anyOfTypes = array_merge($anyOfTypes, $resolved);
            }
            // Check for object type with properties - create model
            else if (isset($option['type']) && $option['type'] === 'object' && isset($option['properties'])) {
                $hasObjectWithProperties = true;
                $objectSchemas[] = $option;
            }
            // Check for primitive types or object without properties
            else if (isset($option['type'])) {
                $primitiveType = mapPrimitiveType($option['type']);
                if ($option['type'] === 'object' && !isset($option['properties'])) {
                    // Object without properties - use stdClass
                    $anyOfTypes[] = '\stdClass';
                } else {
                    $anyOfTypes[] = $primitiveType;
                }
            }
        }
        
        // If we have objects with properties, mark for compound model generation
        if ($hasObjectWithProperties && !empty($objectSchemas)) {
            foreach ($objectSchemas as $objSchema) {
                // Generate a unique model name based on parent context
                $types[] = ['compound' => true, 'base' => 'AnyOfObject', 'schema' => $objSchema];
            }
        }
        
        // Create union type
        if (!empty($anyOfTypes)) {
            $anyOfTypes = array_unique($anyOfTypes);
            $types[] = implode('|', $anyOfTypes);
        }
    }
    
    // Handle allOf - needs compound model generation or union
    if (isset($schema['allOf']) && is_array($schema['allOf'])) {
        $allOfTypes = [];
        $hasProperties = false;
        $hasObject = false;
        
        foreach ($schema['allOf'] as $subSchema) {
            // Check for $ref
            if (isset($subSchema['$ref'])) {
                $resolved = resolveSchemaReference($subSchema['$ref']);
                if ($resolved) {
                    $allOfTypes[] = $resolved;
                }
            }
            // Check for nested anyOf/allOf
            else if (isset($subSchema['anyOf']) || isset($subSchema['allOf'])) {
                $resolved = resolveSchemaTypes($subSchema);
                $allOfTypes = array_merge($allOfTypes, $resolved);
            }
            // Check for properties (inline schema)
            if (isset($subSchema['properties'])) {
                $hasProperties = true;
            }
            // Check for object type
            if (isset($subSchema['type']) && $subSchema['type'] === 'object') {
                $hasObject = true;
            }
        }
        
        // If allOf has properties, we need a compound model
        if ($hasProperties && !empty($allOfTypes)) {
            // Mark this for compound model generation
            $types[] = ['compound' => true, 'base' => $allOfTypes[0], 'schema' => $schema];
        } else if (!empty($allOfTypes)) {
            // Create union type for allOf without properties
            $allOfTypes = array_unique($allOfTypes);
            if ($hasObject) {
                $allOfTypes[] = '\stdClass';
            }
            $types[] = implode('|', $allOfTypes);
        }
    }
    
    // Handle primitive types
    if (isset($schema['type']) && !isset($schema['$ref']) && !isset($schema['anyOf']) && !isset($schema['allOf'])) {
        $primitiveType = mapPrimitiveType($schema['type']);
        if ($schema['type'] === 'object') {
            // Add \stdClass for object types
            $types[] = '\stdClass';
        } else {
            $types[] = $primitiveType;
        }
    }
    
    return array_filter($types);
}

/**
 * Resolve a schema reference to PHP class name
 */
function resolveSchemaReference(string $ref): ?string
{
    if (preg_match('#/schemas/(.+)$#', $ref, $matches)) {
        $schemaName = $matches[1];
        // Remove microsoft.graph. prefix
        $schemaName = preg_replace('/^microsoft\.graph\./', '', $schemaName);
        
        // Keep CollectionResponse as-is (don't convert to Collection)
        // This ensures we use the proper CollectionResponse models
        
        $normalized = normalizeModelName($schemaName);
        
        // Escape reserved keywords
        return escapeReservedKeyword($normalized);
    }
    return null;
}

/**
 * Map primitive type to PHP type
 */
function mapPrimitiveType(string $type): string
{
    return match($type) {
        'string' => 'string',
        'integer' => 'int',
        'number' => 'float',
        'boolean' => 'bool',
        'array' => 'array',
        'object' => '\\\stdClass',  // Always use \\stdClass for root namespace
        default => 'mixed'
    };
}

/**
 * Normalize model name to PascalCase
 */
function normalizeModelName(string $name): string
{
    // Remove microsoft.graph. prefix if present
    $name = preg_replace('/^microsoft\.graph\./', '', $name);
    
    // Remove special characters and split by dots, underscores, hyphens
    $parts = preg_split('/[.\-_]/', $name);
    $normalized = '';
    
    foreach ($parts as $part) {
        $normalized .= ucfirst($part);
    }
    
    return $normalized;
}

/**
 * Normalize parameter name (remove $ and @ prefixes)
 */
function normalizeParameterName(string $name): string
{
    // Remove $ and @ prefixes
    $name = ltrim($name, '$@');
    
    // Convert to camelCase
    return lcfirst(normalizeModelName($name));
}

/**
 * Check if a path segment is a parameter (e.g., {site-id})
 */
function isPathParameter(string $segment): bool
{
    return preg_match('/^\{[^}]+\}$/', $segment) === 1;
}

/**
 * Check if a path segment needs normalization (starts with $ or contains ())
 */
function needsPathNormalization(string $segment): bool
{
    return str_starts_with($segment, '$') || str_contains($segment, '(');
}

/**
 * Normalize special path segments like $count, abs(), etc.
 */
function normalizeSpecialPath(string $segment): array
{
    // Remove $ prefix
    $normalized = ltrim($segment, '$');
    
    // For function-like paths with parameters, extract just the function name
    // e.g., "getByPath(path='{path}')" -> "getByPath"
    if (preg_match('/^([a-zA-Z0-9_]+)\(/', $normalized, $matches)) {
        $normalized = $matches[1];
    } else {
        // Remove all special characters for other cases
        $normalized = preg_replace('/[^a-zA-Z0-9_]/', '', $normalized);
    }
    
    // Convert to PascalCase for class name
    $className = ucfirst($normalized);
    
    // Method name is lowercase first letter
    $methodName = lcfirst($normalized);
    
    return [
        'className' => $className,
        'methodName' => $methodName,
        'originalSegment' => $segment
    ];
}

/**
 * Normalize path parameter to method/class name
 * {site-id} -> SiteId, byId
 */
function normalizePathParameter(string $param): array
{
    // Remove braces
    $param = trim($param, '{}');
    
    // Remove -id suffix if present
    $param = preg_replace('/-id\d*$/', '', $param);
    
    // Convert to PascalCase for class name
    $className = normalizeModelName($param);
    
    // For method name, use 'byId' for single parameters
    $methodName = 'byId';
    
    return [
        'className' => $className,
        'methodName' => $methodName,
        'paramName' => lcfirst($className) . 'Id'
    ];
}

/**
 * Extract and order parameters from operation
 */
function extractParameters(array $operation, array $allParameters = []): array
{
    $parameters = [];
    
    if (!isset($operation['parameters'])) {
        return $parameters;
    }
    
    foreach ($operation['parameters'] as $param) {
        // Handle $ref in parameters
        if (isset($param['$ref'])) {
            $refName = basename($param['$ref']);
            if (isset($allParameters[$refName])) {
                $param = $allParameters[$refName];
            } else {
                continue;
            }
        }
        
        $paramName = $param['name'] ?? null;
        if (!$paramName) {
            continue;
        }
        
        // Normalize parameter name (remove $ prefix)
        $normalizedName = normalizeParameterName($paramName);
        
        // Determine type and item type for arrays
        $type = 'mixed';
        $itemType = null;
        if (isset($param['schema']['type'])) {
            $type = mapPrimitiveType($param['schema']['type']);
            
            // For arrays, extract item type
            if ($param['schema']['type'] === 'array' && isset($param['schema']['items']['type'])) {
                $itemType = mapPrimitiveType($param['schema']['items']['type']);
            }
        }
        
        $parameters[] = [
            'name' => $normalizedName,
            'originalName' => $paramName,  // Keep original for query string
            'in' => $param['in'] ?? 'query',
            'required' => $param['required'] ?? false,
            'type' => $type,
            'itemType' => $itemType,
            'description' => $param['description'] ?? ''
        ];
    }
    
    // Sort: select and expand first, then others
    usort($parameters, function($a, $b) {
        $priority = ['select' => 0, 'expand' => 1];
        $aPriority = $priority[$a['name']] ?? 999;
        $bPriority = $priority[$b['name']] ?? 999;
        return $aPriority - $bPriority;
    });
    
    return $parameters;
}


/**
 * Collect request builder information recursively
 */
function collectRequestBuildersRecursive(string $path, array $node, array $allResponses, array $allParameters = [], int $depth = 0): array
{
    $availableMethods = ['get', 'post', 'put', 'patch', 'delete'];
    $requestBuilderInfo = [
        'path' => $path,
        'methods' => [],
        'childPaths' => []
    ];
    
    // Process HTTP methods
    foreach ($availableMethods as $method) {
        if (!isset($node[$method])) {
            continue;
        }
        
        $operation = $node[$method];
        $responses = $operation['responses'] ?? [];
        
        $requestBuilderInfo['methods'][$method] = [
            'returnTypes' => resolveReturnTypes($responses, $allResponses),
            'parameters' => extractParameters($operation, $allParameters),
            'summary' => $operation['summary'] ?? '',
            'description' => $operation['description'] ?? ''
        ];
    }
    
    // Process child paths
    if (isset($node['childPaths']) && is_array($node['childPaths'])) {
        foreach ($node['childPaths'] as $childPath => $childNode) {
            $requestBuilderInfo['childPaths'][$childPath] = collectRequestBuildersRecursive(
                $childPath,
                $childNode,
                $allResponses,
                $allParameters,
                $depth + 1
            );
        }
    }
    
    return $requestBuilderInfo;
}

/**
 * Generate compound model from allOf pattern
 */
function generateCompoundModel(string $baseName, array $schema, array $allSchemas): string
{
    $properties = [];
    $baseClass = null;
    
    // Extract base class and additional properties from allOf
    foreach ($schema['allOf'] as $subSchema) {
        if (isset($subSchema['$ref'])) {
            $baseClass = resolveSchemaReference($subSchema['$ref']);
        }
        if (isset($subSchema['properties'])) {
            foreach ($subSchema['properties'] as $propName => $propDef) {
                $properties[$propName] = [
                    'type' => mapPropertyTypeFromDef($propDef),
                    'description' => $propDef['description'] ?? ''
                ];
            }
        }
    }
    
    if (!$baseClass) {
        return 'mixed';
    }
    
    // Generate compound class name
    $compoundClassName = implode('', array_map('ucfirst', array_keys($properties))) . $baseClass;
    
    // Generate the model class
    $code = "<?php\n\ndeclare(strict_types=1);\n\n";
    $code .= "namespace ApeDevDe\\MicrosoftGraphSdk\\Models;\n\n";
    $code .= "/**\n * Compound model extending {$baseClass}\n */\n";
    $code .= "class {$compoundClassName} extends {$baseClass}\n{\n";
    
    foreach ($properties as $propName => $propInfo) {
        $phpDocType = $propInfo['type'];
        // Fix array type to include generic
        if ($phpDocType === 'array') {
            $phpDocType = 'array<int, mixed>';
        }
        $code .= "    /**\n     * {$propInfo['description']}\n     * @var {$phpDocType}\n     */\n";
        $code .= "    public {$propInfo['type']} \${$propName};\n\n";
    }
    
    $code .= "}\n";
    
    // Write to file
    $filePath = BUILD_DIR . '/Models/' . $compoundClassName . '.php';
    file_put_contents($filePath, $code);
    
    return $compoundClassName;
}

/**
 * Map property type from definition
 */
function mapPropertyTypeFromDef(array $propDef): string
{
    if (isset($propDef['$ref'])) {
        return resolveSchemaReference($propDef['$ref']) ?? 'mixed';
    }
    
    if (isset($propDef['type'])) {
        return mapPrimitiveType($propDef['type']);
    }
    
    return 'mixed';
}

/**
 * Generate request builder classes for a namespace
 */
function generateRequestBuilderClasses(string $namespace, array $requestBuilders, array $schemas, $output): void
{
    $output->writeln("  <comment>Generating request builders for {$namespace}...</comment>");
    
    // Track compound models to generate
    $compoundModels = [];
    
    // First pass: collect compound models
    foreach ($requestBuilders as $rootPath => $builderInfo) {
        collectCompoundModels($builderInfo, $compoundModels);
    }
    
    // Generate compound models
    foreach ($compoundModels as $modelInfo) {
        generateCompoundModel($modelInfo['base'], $modelInfo['schema'], $schemas);
    }
    
    // Generate request builders
    foreach ($requestBuilders as $rootPath => $builderInfo) {
        generateRequestBuilderClass($namespace, $rootPath, $builderInfo, $schemas, $output);
    }
}

/**
 * Collect compound models from builder info recursively
 */
function collectCompoundModels(array $builderInfo, array &$compoundModels): void
{
    foreach ($builderInfo['methods'] as $method => $methodInfo) {
        foreach ($methodInfo['returnTypes'] as $returnType) {
            if (is_array($returnType) && isset($returnType['compound']) && $returnType['compound']) {
                $compoundModels[] = $returnType;
            }
        }
    }
    
    if (isset($builderInfo['childPaths'])) {
        foreach ($builderInfo['childPaths'] as $childPath => $childInfo) {
            collectCompoundModels($childInfo, $compoundModels);
        }
    }
}

/**
 * Generate a single request builder class
 */
function generateRequestBuilderClass(string $namespace, string $path, array $builderInfo, array $schemas, $output): void
{
    // Normalize path for class name
    if (isPathParameter($path)) {
        $normalized = normalizePathParameter($path);
        $className = $normalized['className'] . 'RequestBuilder';
    } else if (needsPathNormalization($path)) {
        $normalized = normalizeSpecialPath($path);
        $className = $normalized['className'] . 'RequestBuilder';
    } else {
        $className = normalizeModelName($path) . 'RequestBuilder';
    }
    
    // Skip if class name conflicts with base class
    if ($className === 'BaseRequestBuilder') {
        $output->writeln("  <comment>Skipping {$path} - conflicts with base class name</comment>");
        return;
    }
    
    $filePath = BUILD_DIR . '/RequestBuilders/' . $className . '.php';
    
    // Track generated classes to avoid duplicates but keep the one with most children
    static $generatedClasses = [];
    
    $childCount = count($builderInfo['childPaths'] ?? []);
    
    // If already generated, only regenerate if this version has more children
    if (isset($generatedClasses[$className])) {
        if ($childCount <= $generatedClasses[$className]) {
            // Skip this version, the existing one is better or equal
            return;
        }
        // This version has more children, regenerate
    }
    
    // Track this generation
    $generatedClasses[$className] = $childCount;
    
    // Generate class code
    $code = generateRequestBuilderCode($namespace, $className, $path, $builderInfo, $schemas);
    
    // Write to file
    file_put_contents($filePath, $code);
    
    // Generate child request builders recursively
    if (!empty($builderInfo['childPaths'])) {
        foreach ($builderInfo['childPaths'] as $childPath => $childInfo) {
            generateRequestBuilderClass($namespace, $childPath, $childInfo, $schemas, $output);
        }
    }
}

/**
 * Generate request builder class code using templates
 */
function generateRequestBuilderCode(string $namespace, string $className, string $path, array $builderInfo, array $schemas): string
{
    // Collect all return types for imports
    $imports = [];
    foreach ($builderInfo['methods'] as $method => $methodInfo) {
        foreach ($methodInfo['returnTypes'] as $returnType) {
            if (is_string($returnType) && !in_array($returnType, ['string', 'int', 'float', 'bool', 'array', 'mixed', '\stdClass'])) {
                // Handle union types
                $types = explode('|', $returnType);
                foreach ($types as $type) {
                    $type = trim($type);
                    if (!in_array($type, ['string', 'int', 'float', 'bool', 'array', 'mixed', '\stdClass'])) {
                        $imports[] = $type;
                        
                        // If it's a CollectionResponse, also import the item type
                        if (str_ends_with($type, 'CollectionResponse')) {
                            $itemType = str_replace('CollectionResponse', '', $type);
                            if (!in_array($itemType, ['string', 'int', 'float', 'bool', 'array', 'mixed', '\stdClass'])) {
                                $imports[] = $itemType;
                            }
                        }
                    }
                }
            }
        }
    }
    
    // Collect child builder imports
    $childBuilderImports = [];
    foreach ($builderInfo['childPaths'] as $childPath => $childInfo) {
        if (isPathParameter($childPath)) {
            $normalized = normalizePathParameter($childPath);
            $childClassName = $normalized['className'] . 'RequestBuilder';
        } else if (needsPathNormalization($childPath)) {
            $normalized = normalizeSpecialPath($childPath);
            $childClassName = $normalized['className'] . 'RequestBuilder';
        } else {
            $childClassName = normalizeModelName($childPath) . 'RequestBuilder';
        }
        $childBuilderImports[] = $childClassName;
    }
    
    $imports = array_unique($imports);
    $childBuilderImports = array_unique($childBuilderImports);
    
    // Remove self-import (don't import the class into itself)
    $childBuilderImports = array_filter($childBuilderImports, function($import) use ($className) {
        return $import !== $className;
    });
    
    // Generate all methods
    $methods = '';
    
    // Generate HTTP methods
    foreach ($builderInfo['methods'] as $httpMethod => $methodInfo) {
        $methods .= generateHttpMethodFromTemplate($httpMethod, $methodInfo);
    }
    
    // Generate child path methods
    foreach ($builderInfo['childPaths'] as $childPath => $childInfo) {
        $methods .= generateChildPathMethodFromTemplate($childPath);
    }
    
    // Use template to generate class
    return renderTemplate('RequestBuilder.php', [
        'className' => $className,
        'path' => $path,
        'imports' => $imports,
        'childBuilderImports' => $childBuilderImports,
        'methods' => $methods
    ]);
}

/**
 * Generate HTTP method code using template
 */
function generateHttpMethodFromTemplate(string $httpMethod, array $methodInfo): string
{
    $methodName = strtolower($httpMethod);
    $returnTypes = $methodInfo['returnTypes'];
    $parameters = $methodInfo['parameters'];
    
    // Build return type hint
    $returnTypeHint = 'mixed';
    if (!empty($returnTypes)) {
        $returnTypeHint = implode('|', array_map(function($type) {
            return is_array($type) ? 'mixed' : $type;
        }, $returnTypes));
    }
    
    // Build parameter list for method signature
    $paramList = [];
    
    foreach ($parameters as $param) {
        $paramType = $param['type'];
        $paramName = $param['name'];
        $optional = !$param['required'];
        
        $paramList[] = ($optional ? '?' : '') . "{$paramType} \${$paramName}" . ($optional ? ' = null' : '');
    }
    
    // Special handling for request body in POST/PUT/PATCH
    $bodyType = 'array';
    $httpMethodUpper = strtoupper($httpMethod);
    if (in_array($httpMethodUpper, ['POST', 'PUT', 'PATCH'])) {
        // Try to determine body type from return type
        if (!empty($returnTypes)) {
            $firstReturnType = is_array($returnTypes[0]) ? 'mixed' : $returnTypes[0];
            // If return type is a model, use it as body type
            if (!in_array($firstReturnType, ['mixed', 'array', 'string', 'int', 'bool', 'float', '\\stdClass'])) {
                $bodyType = $firstReturnType;
            }
        }
        // Use array<string, mixed> for PHPStan level 6 compliance
        $bodyTypeHint = ($bodyType === 'array') ? 'array' : $bodyType;
        $paramList[] = "{$bodyTypeHint} \$body";
    }
    
    $parameterList = implode(', ', $paramList);
    $summary = $methodInfo['summary'] ?: ucfirst($methodName) . ' request';
    
    // Generate deserializer code
    $deserializerCode = generateDeserializerForMethod($methodName, $returnTypeHint);
    
    return renderTemplate('HttpMethod.php', [
        'httpMethod' => $httpMethod,
        'methodName' => $methodName,
        'summary' => $summary,
        'parameters' => $parameters,
        'returnTypeHint' => $returnTypeHint,
        'parameterList' => $parameterList,
        'bodyType' => $bodyType
    ]) . "\n" . $deserializerCode;
}

/**
 * Generate deserializer method for a return type
 */
function generateDeserializerForMethod(string $methodName, string $returnType): string
{
    // Check if only stdClass
    if ($returnType === '\\stdClass') {
        return renderTemplate('Deserializer.php', [
            'methodName' => ucfirst($methodName),
            'returnType' => $returnType,
            'isStdClass' => true,
            'isCollection' => false,
            'deserializerCode' => '',
            'itemDeserializer' => ''
        ]);
    }
    
    // Check if collection (ends with CollectionResponse)
    $isCollection = str_contains($returnType, 'CollectionResponse');
    
    if ($isCollection) {
        // Extract item type
        $types = explode('|', $returnType);
        $collectionType = trim($types[0]);
        // Remove CollectionResponse suffix to get item type
        $itemType = str_replace('CollectionResponse', '', $collectionType);
        
        // For primitive collection types, don't instantiate, just use the value
        if (in_array($itemType, ['String', 'Int', 'Float', 'Bool'])) {
            $itemDeserializer = '$item';
        } else {
            $itemDeserializer = generateObjectCreation($itemType, '$item');
        }
        
        return renderTemplate('Deserializer.php', [
            'methodName' => ucfirst($methodName),
            'returnType' => $returnType,
            'isStdClass' => false,
            'isCollection' => true,
            'deserializerCode' => '',
            'itemDeserializer' => $itemDeserializer,
            'collectionClass' => $collectionType
        ]);
    }
    
    // Single object - use first non-stdClass type
    $types = explode('|', $returnType);
    $firstType = trim($types[0]);
    $deserializerCode = generateObjectCreation($firstType, '$data');
    
    return renderTemplate('Deserializer.php', [
        'methodName' => ucfirst($methodName),
        'returnType' => $returnType,
        'isStdClass' => false,
        'isCollection' => false,
        'deserializerCode' => $deserializerCode,
        'itemDeserializer' => ''
    ]);
}

/**
 * Generate object creation code from array data
 */
function generateObjectCreation(string $className, string $dataVar): string
{
    if ($className === '\\stdClass') {
        return "(object){$dataVar}";
    }
    
    // Handle array return type
    if ($className === 'array') {
        return $dataVar;
    }
    
    // Handle mixed return type
    if ($className === 'mixed') {
        return $dataVar;
    }
    
    // Handle primitive types (string, int, float, bool) - just return the data
    if (in_array($className, ['string', 'int', 'float', 'bool'])) {
        return $dataVar;
    }
    
    // For known empty models without constructors, return stdClass
    $emptyModels = ['Compliance', 'ODataCountResponse', 'OnAttributeCollectionHandler', 'OnAuthenticationMethodLoadStartHandler'];
    if (in_array($className, $emptyModels)) {
        return "(object){$dataVar}";
    }
    
    // Generate new instance with data array
    return "new {$className}({$dataVar})";
}

/**
 * Generate child path navigation method using template
 */
function generateChildPathMethodFromTemplate(string $childPath): string
{
    // Check if this is a path parameter
    if (isPathParameter($childPath)) {
        $normalized = normalizePathParameter($childPath);
        $methodName = $normalized['methodName'];
        $className = $normalized['className'] . 'RequestBuilder';
        $paramName = $normalized['paramName'];
        
        return renderTemplate('ByIdMethod.php', [
            'itemBuilderClass' => $className,
            'paramName' => $paramName
        ]);
    }
    
    // Check if this needs special normalization ($count, abs(), etc.)
    if (needsPathNormalization($childPath)) {
        // Skip function-like paths with parameters (e.g., func(param={value}))
        // These should be handled as operations on the base function path
        if (preg_match('/\([^)]*=/', $childPath)) {
            return ''; // Skip generating duplicate method
        }
        
        $normalized = normalizeSpecialPath($childPath);
        $methodName = $normalized['methodName'];
        $className = $normalized['className'] . 'RequestBuilder';
        $originalSegment = $normalized['originalSegment'];
        
        return renderTemplate('ChildPathMethod.php', [
            'childPath' => $originalSegment,
            'methodName' => $methodName,
            'className' => $className
        ]);
    }
    
    // Regular child path
    $methodName = lcfirst(normalizeModelName($childPath));
    $className = normalizeModelName($childPath) . 'RequestBuilder';
    
    return renderTemplate('ChildPathMethod.php', [
        'childPath' => $childPath,
        'methodName' => $methodName,
        'className' => $className
    ]);
}

/**
 * Build a nested tree structure from API paths
 * 
 * @param string $namespace The API namespace to process
 * @return array Nested tree structure where each node contains path specifications and child paths
 */
function collectPathesRecursive(string $namespace): array
{
    $openApi = file_get_contents(TMP_DIR . "/paths_$namespace.yaml");
    $yaml = Yaml::parse($openApi);
    
    // First pass: prepare all paths with their parts
    $preparedPaths = [];
    foreach ($yaml['paths'] as $path => $pathSpec) {
        $pathExplode = array_values(array_filter(explode('/', $path))); // Remove empty parts
        $pathSpec['pathParts'] = $pathExplode;
        $preparedPaths[] = $pathSpec;
    }
    
    // Sort paths by depth (shallowest first)
    usort($preparedPaths, function ($a, $b) {
        return count($a['pathParts']) - count($b['pathParts']);
    });
    
    // Build the tree
    $tree = [];
    
    foreach ($preparedPaths as $pathSpec) {
        $currentLevel = &$tree;
        $pathParts = $pathSpec['pathParts'];
        
        foreach ($pathParts as $index => $part) {
            $isLast = ($index === count($pathParts) - 1);
            
            // Ensure the path part exists in the tree
            if (!isset($currentLevel[$part])) {
                $currentLevel[$part] = [
                    'pathParts' => array_slice($pathParts, 0, $index + 1),
                    'childPaths' => []
                ];
            }
            
            // If this is the last part, merge the full path spec
            if ($isLast) {
                // Preserve childPaths if they already exist
                $existingChildPaths = $currentLevel[$part]['childPaths'] ?? [];
                $currentLevel[$part] = array_merge($pathSpec, [
                    'childPaths' => $existingChildPaths
                ]);
            } else {
                // Ensure childPaths exists for intermediate nodes
                if (!isset($currentLevel[$part]['childPaths'])) {
                    $currentLevel[$part]['childPaths'] = [];
                }
                // Move to the next level
                $currentLevel = &$currentLevel[$part]['childPaths'];
            }
        }
    }
    
    return $tree;
}

/**
 * Parse schemas from OpenAPI file using YAML parser
 * Extracts the components.schemas section and parses it properly
 */
function parseSchemas($output): array
{
    $output->writeln('<comment>  Reading schemas section...</comment>');
    
    $handle = fopen(OPENAPI_FILE, 'r');
    if (!$handle) {
        return [];
    }
    
    // Extract the entire components section
    $inComponents = false;
    $componentsYaml = '';
    $componentsIndent = 0;
    
    while (($line = fgets($handle)) !== false) {
        // Detect components section start
        if (!$inComponents && trim($line) === 'components:') {
            $inComponents = true;
            $componentsYaml = $line;
            continue;
        }
        
        if ($inComponents) {
            // Check if we've exited the components section (back to root level)
            if (strlen($line) > 0 && $line[0] !== ' ' && trim($line) !== '') {
                break;
            }
            $componentsYaml .= $line;
        }
    }
    
    fclose($handle);
    
    if (empty($componentsYaml)) {
        $output->writeln('<error>Could not find components section</error>');
        return [];
    }
    
    try {
        // Parse the entire components section
        $components = Yaml::parse($componentsYaml);
        
        if (!isset($components['components']['schemas'])) {
            $output->writeln('<error>No schemas found in components</error>');
            return [];
        }
        
        $rawSchemas = $components['components']['schemas'];
        $schemas = [];
        $schemaCount = 0;
        
        // Process each schema
        foreach ($rawSchemas as $schemaName => $schemaData) {
            $schemas[$schemaName] = normalizeSchemaStructure($schemaData);
            $schemaCount++;
            
            if ($schemaCount % 100 == 0) {
                gc_collect_cycles();
                $output->writeln("<comment>    Parsed {$schemaCount} schemas...</comment>");
            }
        }
        
        $output->writeln("<comment>    Total schemas parsed: {$schemaCount}</comment>");
        return $schemas;
        
    } catch (Exception $e) {
        $output->writeln('<error>Failed to parse schemas: ' . $e->getMessage() . '</error>');
        return [];
    }
}

/**
 * Normalize schema structure from parsed YAML
 * Extracts properties and handles inheritance patterns (allOf, anyOf)
 * Filters out @odata.* metadata properties (type, count, nextLink, etc.)
 */
function normalizeSchemaStructure(array $schemaData): array
{
    $schema = ['properties' => []];
    
    // Handle allOf (inheritance pattern)
    if (isset($schemaData['allOf']) && is_array($schemaData['allOf'])) {
        $schema['allOf'] = [];
        foreach ($schemaData['allOf'] as $item) {
            if (isset($item['$ref'])) {
                // Extract schema name from reference
                $ref = $item['$ref'];
                if (preg_match('#/schemas/(.+)$#', $ref, $matches)) {
                    $schema['allOf'][] = ['$ref' => $matches[1]];
                }
            } elseif (isset($item['properties'])) {
                // Filter out all @odata.* properties (metadata)
                $filteredProperties = array_filter(
                    $item['properties'],
                    fn($key) => !str_starts_with($key, '@odata.'),
                    ARRAY_FILTER_USE_KEY
                );
                $schema['allOf'][] = ['properties' => $filteredProperties];
            }
        }
    }
    
    // Handle direct properties and filter out all @odata.* properties
    if (isset($schemaData['properties']) && is_array($schemaData['properties'])) {
        $schema['properties'] = array_filter(
            $schemaData['properties'],
            fn($key) => !str_starts_with($key, '@odata.'),
            ARRAY_FILTER_USE_KEY
        );
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
        
        // Handle allOf schemas (merge all properties including inherited ones)
        if (isset($schemaData['allOf'])) {
            foreach ($schemaData['allOf'] as $idx => $subSchema) {
                // Handle $ref to parent schemas
                if (isset($subSchema['$ref'])) {
                    $refName = basename($subSchema['$ref']);
                    if (isset($schemas[$refName])) {
                        $parentProperties = resolveSchemaProperties($schemas[$refName], $schemas);
                        $properties = array_merge($properties, $parentProperties);
                    }
                }
                // Handle direct properties
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
 * Recursively resolve schema properties including inherited ones
 */
function resolveSchemaProperties(array $schemaData, array $allSchemas): array
{
    $properties = [];
    
    // Handle allOf (inheritance)
    if (isset($schemaData['allOf'])) {
        foreach ($schemaData['allOf'] as $subSchema) {
            // Resolve $ref
            if (isset($subSchema['$ref'])) {
                $refName = basename($subSchema['$ref']);
                if (isset($allSchemas[$refName])) {
                    $parentProperties = resolveSchemaProperties($allSchemas[$refName], $allSchemas);
                    $properties = array_merge($properties, $parentProperties);
                }
            }
            // Direct properties
            if (isset($subSchema['properties'])) {
                $properties = array_merge($properties, $subSchema['properties']);
            }
        }
    }
    
    // Direct properties
    if (isset($schemaData['properties'])) {
        $properties = array_merge($properties, $schemaData['properties']);
    }
    
    return $properties;
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
        // Skip @odata.type as it's a metadata property
        if ($propName === '@odata.type') {
            continue;
        }
        
        $mappedProperties[$propName] = [
            'type' => mapPropertyType($propDef),
            'description' => $propDef['description'] ?? '',
            'items' => $propDef['items'] ?? null,
            'itemType' => resolveArrayItemType($propDef) // Resolve the item type for arrays
        ];
    }
    
    return renderTemplate('Model.php.template', [
        'MODEL_NAME' => $escapedModelName,
        'PROPERTIES' => $mappedProperties
    ]);
}

/**
 * Map property type to PHP type
 * Handles anyOf, allOf, $ref, and standard types
 * Escapes reserved keywords (e.g., 'list' becomes 'ListModel')
 */
function mapPropertyType(array $propDef): string
{
    // Handle allOf - merge all types, prefer first $ref
    if (isset($propDef['allOf']) && is_array($propDef['allOf'])) {
        foreach ($propDef['allOf'] as $subSchema) {
            if (isset($subSchema['$ref'])) {
                $className = resolveSchemaReference($subSchema['$ref']);
                if ($className) {
                    return '?' . $className;
                }
            }
        }
    }
    
    // Handle anyOf - prefer the $ref type if present, check for properties
    if (isset($propDef['anyOf']) && is_array($propDef['anyOf'])) {
        $anyOfTypes = [];
        $hasObjectWithProperties = false;
        
        foreach ($propDef['anyOf'] as $option) {
            // Look for a $ref in anyOf options
            if (isset($option['$ref'])) {
                $className = resolveSchemaReference($option['$ref']);
                if ($className) {
                    $anyOfTypes[] = $className;
                }
            }
            // If it's an object type with properties, we should generate a model
            else if (isset($option['type']) && $option['type'] === 'object' && isset($option['properties'])) {
                $hasObjectWithProperties = true;
                // For now, mark as mixed - compound model generation would handle this
                $anyOfTypes[] = 'mixed';
            }
            // If it's an object type without properties, add \stdClass
            else if (isset($option['type']) && $option['type'] === 'object') {
                $anyOfTypes[] = '\stdClass';
            }
        }
        
        // Return union type or fallback
        if (!empty($anyOfTypes)) {
            return '?' . implode('|', array_unique($anyOfTypes));
        }
        return '?\stdClass';
    }
    
    // Handle direct $ref
    if (isset($propDef['$ref'])) {
        $className = resolveSchemaReference($propDef['$ref']);
        if ($className) {
            return '?' . $className;
        }
    }
    
    $type = $propDef['type'] ?? 'string';
    $format = $propDef['format'] ?? null;
    
    if ($type === 'array') {
        return 'array';
    }
    
    if ($type === 'object') {
        return '?\stdClass';
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
 * Resolve array item type from property definition
 * Handles $ref, allOf, anyOf in items
 * Returns null if not an array or no specific type found
 */
function resolveArrayItemType(array $propDef): ?string
{
    $type = $propDef['type'] ?? null;
    
    if ($type !== 'array') {
        return null;
    }
    
    $items = $propDef['items'] ?? null;
    if (!$items) {
        return null;
    }
    
    // Handle direct $ref in items
    if (isset($items['$ref'])) {
        return resolveSchemaReference($items['$ref']);
    }
    
    // Handle allOf in items (merge all types, prefer first $ref)
    if (isset($items['allOf']) && is_array($items['allOf'])) {
        foreach ($items['allOf'] as $subSchema) {
            if (isset($subSchema['$ref'])) {
                return resolveSchemaReference($subSchema['$ref']);
            }
        }
    }
    
    // Handle anyOf in items (prefer $ref over primitive types)
    if (isset($items['anyOf']) && is_array($items['anyOf'])) {
        foreach ($items['anyOf'] as $option) {
            if (isset($option['$ref'])) {
                return resolveSchemaReference($option['$ref']);
            }
        }
    }
    
    // Handle primitive types
    if (isset($items['type'])) {
        return match($items['type']) {
            'string' => 'string',
            'integer' => 'int',
            'number' => 'float',
            'boolean' => 'bool',
            default => 'mixed'
        };
    }
    
    return 'mixed';
}

// Duplicate functions removed - using versions defined earlier in the file

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
    
    return renderTemplate('CollectionModel.php.template', [
        'COLLECTION_NAME' => $collectionName,
        'ITEM_TYPE' => $escapedModelName
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


function collectNamespaces()
{
    $chunkFiles = glob(TMP_DIR . '/paths_*.yaml');
    $namespaces = [];
    foreach ($chunkFiles as $chunkFile) {
        $namespace = basename($chunkFile, '.yaml');
        $namespaces[] = str_replace('paths_', '', $namespace);
    }

    return $namespaces;
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
 * Normalizes the name and escapes reserved keywords
 */
function extractModelNameFromSchema(array $schema): ?string
{
    if (isset($schema['$ref'])) {
        $ref = $schema['$ref'];
        if (preg_match('#/schemas/(.+)$#', $ref, $matches)) {
            $modelName = normalizeModelName($matches[1]);
            return escapeReservedKeyword($modelName);
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
 * Handles anyOf, $ref, and standard types
 * Uses extractModelNameFromSchema which handles reserved keyword escaping
 */
function mapOpenApiTypeToPhp(array $propDef): string
{
    $nullable = $propDef['nullable'] ?? false;
    $prefix = $nullable ? '?' : '';
    
    // Handle anyOf - prefer the $ref type if present, otherwise use object
    if (isset($propDef['anyOf']) && is_array($propDef['anyOf'])) {
        foreach ($propDef['anyOf'] as $option) {
            // Look for a $ref in anyOf options
            if (isset($option['$ref'])) {
                $modelName = extractModelNameFromSchema($option);
                if ($modelName) {
                    return '?' . $modelName;
                }
            }
            // If it's an object type without $ref, use array
            if (isset($option['type']) && $option['type'] === 'object') {
                return '?array';
            }
        }
        // Fallback if no suitable type found
        return '?array';
    }
    
    if (isset($propDef['$ref'])) {
        $modelName = extractModelNameFromSchema($propDef);
        return $prefix . ($modelName ?? 'mixed');
    }
    
    $type = $propDef['type'] ?? 'string';
    $format = $propDef['format'] ?? null;
    
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

// Old duplicate functions removed - using new versions defined earlier

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
    
    // Find subpaths (e.g., /users/{user-id}/activities, /sites/{site-id}/drives)
    $subpaths = [];
    $itemPathPattern = "/{$namespace}/{"; // e.g., /users/{, /sites/{
    
    // Debug: show what we're looking for
    if ($namespace === 'sites') {
        $output->writeln("<comment>      Looking for pattern: {$itemPathPattern}...</comment>");
        $matchCount = 0;
        foreach ($paths as $path => $methods) {
            if (strpos($path, '/sites/') === 0) {
                $matchCount++;
                if ($matchCount <= 10) {
                    $output->writeln("<comment>        Path #{$matchCount}: {$path}</comment>");
                }
            }
        }
        $output->writeln("<comment>      Total /sites/ paths found: {$matchCount}</comment>");
    }
    
    foreach ($paths as $path => $methods) {
        // Check if this is a subpath of the item (e.g., /users/{user-id}/activities)
        // Pattern: /namespace/{param-id}/subresource
        if (preg_match("#^{$itemPathPattern}[^/]+}/([^/\{]+)(?:/|$)#", $path, $matches)) {
            $subresource = $matches[1];
            if (!isset($subpaths[$subresource])) {
                $subpaths[$subresource] = [];
            }
            $subpaths[$subresource][$path] = $methods;
        }
    }
    
    // Debug output for sites to verify subpaths are found
    if ($namespace === 'sites') {
        $output->writeln("<info>      Found subpaths for {$className}: " . (empty($subpaths) ? 'NONE' : implode(', ', array_keys($subpaths))) . "</info>");
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
