<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Tests\Collections;

use ApeDevDe\MicrosoftGraphSdk\Tests\GraphTestCase;

/**
 * Tests for Sites collection
 */
class SitesTest extends GraphTestCase
{
    public function testCanAccessBuilder(): void
    {
        $builder = self::$client->sites();
        $this->assertNotNull($builder);
    }

    public function testCanGetCollection(): void
    {
        $collection = self::$client->sites()->get();
        
        $this->assertNotNull($collection);
        $this->assertIsArray($collection->getValue());
    }

    public function testCanGetCollectionWithTop(): void
    {
        $collection = self::$client->sites()->get(
            queryParameters: ['$top' => 1]
        );
        
        $this->assertNotNull($collection);
        $this->assertIsArray($collection->getValue());
        $this->assertLessThanOrEqual(1, count($collection->getValue()));
    }

    public function testCanGetCollectionWithSelect(): void
    {
        $collection = self::$client->sites()->get(
            queryParameters: ['$select' => 'id', '$top' => 1]
        );
        
        $this->assertNotNull($collection);
        $this->assertIsArray($collection->getValue());
    }

    public function testCanGetItemById(): void
    {
        // Get first item from collection
        $collection = self::$client->sites()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Get item by ID
        $fetchedItem = self::$client->sites()->byId($itemId)->get();
        
        $this->assertNotNull($fetchedItem);
        $this->assertEquals($itemId, $fetchedItem->getId());
    }

    public function testQueryOptionsHasFieldConstants(): void
    {
        $queryOptionsClass = 'ApeDevDe\\MicrosoftGraphSdk\\QueryOptions\\SitesQueryOptions';
        
        if (!class_exists($queryOptionsClass)) {
            $this->markTestSkipped("QueryOptions class does not exist: {$queryOptionsClass}");
        }
        
        $reflection = new \ReflectionClass($queryOptionsClass);
        $constants = $reflection->getConstants();
        
        $this->assertNotEmpty($constants, 'SitesQueryOptions should have field constants');
        
        // Check that constants follow the FIELD_* pattern
        $fieldConstants = array_filter(array_keys($constants), fn($key) => str_starts_with($key, 'FIELD_'));
        $this->assertNotEmpty($fieldConstants, 'SitesQueryOptions should have FIELD_* constants');
    }

    public function testCollectionResponseHasTypeSafety(): void
    {
        $collectionClass = 'ApeDevDe\\MicrosoftGraphSdk\\Models\\SiteCollectionResponse';
        
        if (!class_exists($collectionClass)) {
            $this->markTestSkipped('SiteCollectionResponse does not exist');
        }
        
        $reflection = new \ReflectionClass($collectionClass);
        $getValueMethod = $reflection->getMethod('getValue');
        
        $this->assertTrue($getValueMethod->hasReturnType());
        $this->assertEquals('array', $getValueMethod->getReturnType()->getName());
        
        // Check for variadic parameter (type safety)
        $setValueMethod = $reflection->getMethod('setValue');
        $parameters = $setValueMethod->getParameters();
        
        if (count($parameters) > 0) {
            $this->assertTrue($parameters[0]->isVariadic(), 'SiteCollectionResponse should have variadic setValue parameter');
        }
    }

}
