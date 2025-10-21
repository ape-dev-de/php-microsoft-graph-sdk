<?php

declare(strict_types=1);

/**
 * Generate test files for all namespaces
 * Separates collection tests from model tests
 */

define('BUILD_DIR', __DIR__ . '/build');
define('COLLECTIONS_TESTS_DIR', __DIR__ . '/tests/Collections');
define('MODELS_TESTS_DIR', __DIR__ . '/tests/Models');
define('COLLECTION_TEMPLATE_FILE', __DIR__ . '/templates/CollectionTest.php.template');
define('MODEL_TEMPLATE_FILE', __DIR__ . '/templates/ModelTest.php.template');

// Create tests directories
if (!is_dir(COLLECTIONS_TESTS_DIR)) {
    mkdir(COLLECTIONS_TESTS_DIR, 0755, true);
}
if (!is_dir(MODELS_TESTS_DIR)) {
    mkdir(MODELS_TESTS_DIR, 0755, true);
}

// Load templates
$collectionTemplate = file_get_contents(COLLECTION_TEMPLATE_FILE);
$modelTemplate = file_get_contents(MODEL_TEMPLATE_FILE);

// Get root namespaces from GraphRequestBuilder
$graphBuilderFile = BUILD_DIR . '/RequestBuilders/GraphRequestBuilder.php';
$graphBuilderContent = file_get_contents($graphBuilderFile);

// Extract method names from GraphRequestBuilder (these are root namespaces)
preg_match_all('/public function (\w+)\(\):/m', $graphBuilderContent, $matches);
$rootNamespaces = $matches[1] ?? [];

if (empty($rootNamespaces)) {
    die("Error: Could not find root namespaces in GraphRequestBuilder\n");
}

$generatedCollections = 0;
$generatedModels = 0;

foreach ($rootNamespaces as $namespaceLower) {
    $namespace = ucfirst($namespaceLower);
    $builderName = "{$namespace}RequestBuilder";
    
    // Extract namespace (e.g., UsersRequestBuilder -> users)
    $namespace = str_replace('RequestBuilder', '', $builderName);
    $namespaceLower = lcfirst($namespace);
    
    // Normalize model name (remove trailing 's')
    if (substr($namespace, -1) === 's' && $namespace !== 'News') {
        $modelName = substr($namespace, 0, -1);
    } else {
        $modelName = $namespace;
    }
    
    // Check if it's a collection resource by looking at the RequestBuilder's get() method
    $builderFile = BUILD_DIR . "/RequestBuilders/{$namespace}RequestBuilder.php";
    $isCollection = false;
    
    if (file_exists($builderFile)) {
        $builderContent = file_get_contents($builderFile);
        // Check if get() returns a CollectionResponse
        if (preg_match('/public function get\([^)]*\):\s*(\w+)/', $builderContent, $returnMatch)) {
            $returnType = $returnMatch[1];
            $isCollection = str_ends_with($returnType, 'CollectionResponse');
        }
    }
    
    if ($isCollection) {
        // Generate collection test
        $testClassName = "{$namespace}Test";
        $testFile = COLLECTIONS_TESTS_DIR . "/{$testClassName}.php";
        
        // Skip if already exists
        if (file_exists($testFile)) {
            continue;
        }
        
        // Detect subpaths by checking ItemRequestBuilder
        $itemBuilderFile = BUILD_DIR . "/RequestBuilders/{$modelName}ItemRequestBuilder.php";
        $subpaths = [];
        $nestedSubpaths = [];
        
        if (file_exists($itemBuilderFile)) {
            $itemBuilderContent = file_get_contents($itemBuilderFile);
            // Extract public methods that return RequestBuilders (subpaths)
            preg_match_all('/public function (\w+)\(\): (\w+RequestBuilder)/m', $itemBuilderContent, $subpathMatches);
            if (!empty($subpathMatches[1])) {
                foreach ($subpathMatches[1] as $idx => $subpathMethod) {
                    // Skip CRUD methods
                    if (!in_array($subpathMethod, ['get', 'post', 'patch', 'delete', 'put'])) {
                        $subpaths[] = [
                            'method' => $subpathMethod,
                            'builder' => $subpathMatches[2][$idx]
                        ];
                        
                        // Check for nested subpaths (e.g., authentication -> emailMethods)
                        $subpathBuilderFile = BUILD_DIR . "/RequestBuilders/{$subpathMatches[2][$idx]}.php";
                        if (file_exists($subpathBuilderFile)) {
                            $subpathBuilderContent = file_get_contents($subpathBuilderFile);
                            preg_match_all('/public function (\w+)\(\): (\w+RequestBuilder)/m', $subpathBuilderContent, $nestedMatches);
                            if (!empty($nestedMatches[1])) {
                                foreach ($nestedMatches[1] as $nestedIdx => $nestedMethod) {
                                    if (!in_array($nestedMethod, ['get', 'post', 'patch', 'delete', 'put'])) {
                                        $nestedSubpaths[] = [
                                            'parent' => $subpathMethod,
                                            'method' => $nestedMethod,
                                            'builder' => $nestedMatches[2][$nestedIdx]
                                        ];
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        
        // Generate subpath tests
        $subpathTests = '';
        if (!empty($subpaths)) {
            // Limit to first 3 subpaths to keep tests manageable
            $limitedSubpaths = array_slice($subpaths, 0, 3);
            foreach ($limitedSubpaths as $subpath) {
                $subpathMethod = $subpath['method'];
                $subpathTests .= "\n    public function testCanAccess" . ucfirst($subpathMethod) . "Subpath(): void\n";
                $subpathTests .= "    {\n";
                $subpathTests .= "        // Get first item from collection\n";
                $subpathTests .= "        \$collection = self::\$client->{$namespaceLower}()->get(\n";
                $subpathTests .= "            queryParameters: ['\$top' => 1]\n";
                $subpathTests .= "        );\n";
                $subpathTests .= "        \n";
                $subpathTests .= "        if (empty(\$collection->getValue())) {\n";
                $subpathTests .= "            \$this->markTestSkipped('No items in collection');\n";
                $subpathTests .= "        }\n";
                $subpathTests .= "        \n";
                $subpathTests .= "        \$item = \$collection->getValue()[0];\n";
                $subpathTests .= "        \$itemId = \$item->getId();\n";
                $subpathTests .= "        \n";
                $subpathTests .= "        // Access subpath and get data\n";
                $subpathTests .= "        \$result = self::\$client->{$namespaceLower}()->byId(\$itemId)->{$subpathMethod}()->get();\n";
                $subpathTests .= "        \$this->assertNotNull(\$result);\n";
                $subpathTests .= "    }\n";
            }
        }
        
        // Generate nested subpath tests
        if (!empty($nestedSubpaths)) {
            // Limit to first 2 nested subpaths
            $limitedNested = array_slice($nestedSubpaths, 0, 2);
            foreach ($limitedNested as $nested) {
                $parentMethod = $nested['parent'];
                $nestedMethod = $nested['method'];
                $testName = ucfirst($parentMethod) . ucfirst($nestedMethod);
                $subpathTests .= "\n    public function testCanAccess{$testName}NestedSubpath(): void\n";
                $subpathTests .= "    {\n";
                $subpathTests .= "        // Get first item from collection\n";
                $subpathTests .= "        \$collection = self::\$client->{$namespaceLower}()->get(\n";
                $subpathTests .= "            queryParameters: ['\$top' => 1]\n";
                $subpathTests .= "        );\n";
                $subpathTests .= "        \n";
                $subpathTests .= "        if (empty(\$collection->getValue())) {\n";
                $subpathTests .= "            \$this->markTestSkipped('No items in collection');\n";
                $subpathTests .= "        }\n";
                $subpathTests .= "        \n";
                $subpathTests .= "        \$item = \$collection->getValue()[0];\n";
                $subpathTests .= "        \$itemId = \$item->getId();\n";
                $subpathTests .= "        \n";
                $subpathTests .= "        // Access nested subpath and get data\n";
                $subpathTests .= "        \$result = self::\$client->{$namespaceLower}()->byId(\$itemId)->{$parentMethod}()->{$nestedMethod}()->get();\n";
                $subpathTests .= "        \$this->assertNotNull(\$result);\n";
                $subpathTests .= "    }\n";
            }
        }
        
        // Generate test file
        $testCode = str_replace(
            [
                '{{NAMESPACE}}',
                '{{NAMESPACE_LOWER}}',
                '{{MODEL_NAME}}',
                '{{TEST_CLASS_NAME}}',
                '{{SUBPATH_TESTS}}'
            ],
            [
                $namespace,
                $namespaceLower,
                $modelName,
                $testClassName,
                $subpathTests
            ],
            $collectionTemplate
        );
        
        file_put_contents($testFile, $testCode);
        $generatedCollections++;
        
        echo "Generated collection test: {$testClassName}\n";
    } else {
        // Generate model test
        $testClassName = "{$namespace}Test";
        $testFile = MODELS_TESTS_DIR . "/{$testClassName}.php";
        
        // Skip if already exists
        if (file_exists($testFile)) {
            continue;
        }
        
        // Generate test file
        $testCode = str_replace(
            [
                '{{NAMESPACE}}',
                '{{NAMESPACE_LOWER}}',
                '{{MODEL_NAME}}',
                '{{TEST_CLASS_NAME}}'
            ],
            [
                $namespace,
                $namespaceLower,
                $modelName,
                $testClassName
            ],
            $modelTemplate
        );
        
        file_put_contents($testFile, $testCode);
        $generatedModels++;
        
        echo "Generated model test: {$testClassName}\n";
    }
}

echo "\n✓ Generated {$generatedCollections} collection tests\n";
echo "✓ Generated {$generatedModels} model tests\n";
echo "✓ Total: " . ($generatedCollections + $generatedModels) . " test files\n";
echo "Run tests with: composer test\n";
