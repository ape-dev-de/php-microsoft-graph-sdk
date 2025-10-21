<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Tests\Models;

use ApeDevDe\MicrosoftGraphSdk\Tests\GraphTestCase;

/**
 * Tests for Print singular resource
 */
class PrintTest extends GraphTestCase
{
    public function testCanAccessBuilder(): void
    {
        $builder = self::$client->print();
        $this->assertNotNull($builder);
    }

    public function testCanGetResource(): void
    {
        $resource = self::$client->print()->get();
        
        $this->assertNotNull($resource);
    }

    public function testCanGetResourceWithSelect(): void
    {
        $resource = self::$client->print()->get(
            queryParameters: ['$select' => 'id']
        );
        
        $this->assertNotNull($resource);
    }

    public function testModelClassExists(): void
    {
        // Get the actual model class from the RequestBuilder
        $builderFile = __DIR__ . '/../../build/RequestBuilders/PrintRequestBuilder.php';
        if (file_exists($builderFile)) {
            $content = file_get_contents($builderFile);
            if (preg_match('/use ApeDevDe\\\\MicrosoftGraphSdk\\\\Models\\\\(\w+);/', $content, $matches)) {
                $actualModelClass = 'ApeDevDe\\MicrosoftGraphSdk\\Models\\' . $matches[1];
                $this->assertTrue(class_exists($actualModelClass), "Model class {$actualModelClass} should exist");
                return;
            }
        }
        
        // Fallback: try both singular and plural forms
        $modelClass = 'ApeDevDe\\MicrosoftGraphSdk\\Models\\Print';
        $modelClassSingular = 'ApeDevDe\\MicrosoftGraphSdk\\Models\\Print';
        
        $exists = class_exists($modelClass) || class_exists($modelClassSingular);
        $this->assertTrue($exists, "Model class {$modelClass} or {$modelClassSingular} should exist");
    }
}
