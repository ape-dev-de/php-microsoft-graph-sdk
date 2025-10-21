<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Tests\Collections;

use ApeDevDe\MicrosoftGraphSdk\Tests\GraphTestCase;

/**
 * Tests for Shares collection
 */
class SharesTest extends GraphTestCase
{
    public function testCanAccessBuilder(): void
    {
        $builder = self::$client->shares();
        $this->assertNotNull($builder);
    }

    public function testCanGetCollection(): void
    {
        $collection = self::$client->shares()->get();
        
        $this->assertNotNull($collection);
        $this->assertIsArray($collection->getValue());
    }

    public function testCanGetCollectionWithTop(): void
    {
        $collection = self::$client->shares()->get(
            queryParameters: ['$top' => 1]
        );
        
        $this->assertNotNull($collection);
        $this->assertIsArray($collection->getValue());
        $this->assertLessThanOrEqual(1, count($collection->getValue()));
    }

    public function testCanGetCollectionWithSelect(): void
    {
        $collection = self::$client->shares()->get(
            queryParameters: ['$select' => 'id', '$top' => 1]
        );
        
        $this->assertNotNull($collection);
        $this->assertIsArray($collection->getValue());
    }

    public function testCanGetItemById(): void
    {
        // Get first item from collection
        $collection = self::$client->shares()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Get item by ID
        $fetchedItem = self::$client->shares()->byId($itemId)->get();
        
        $this->assertNotNull($fetchedItem);
        $this->assertEquals($itemId, $fetchedItem->getId());
    }

    public function testQueryOptionsHasFieldConstants(): void
    {
        $queryOptionsClass = 'ApeDevDe\\MicrosoftGraphSdk\\QueryOptions\\SharesQueryOptions';
        
        if (!class_exists($queryOptionsClass)) {
            $this->markTestSkipped("QueryOptions class does not exist: {$queryOptionsClass}");
        }
        
        $reflection = new \ReflectionClass($queryOptionsClass);
        $constants = $reflection->getConstants();
        
        $this->assertNotEmpty($constants, 'SharesQueryOptions should have field constants');
        
        // Check that constants follow the FIELD_* pattern
        $fieldConstants = array_filter(array_keys($constants), fn($key) => str_starts_with($key, 'FIELD_'));
        $this->assertNotEmpty($fieldConstants, 'SharesQueryOptions should have FIELD_* constants');
    }

    public function testCollectionResponseHasTypeSafety(): void
    {
        $collectionClass = 'ApeDevDe\\MicrosoftGraphSdk\\Models\\ShareCollectionResponse';
        
        if (!class_exists($collectionClass)) {
            $this->markTestSkipped('ShareCollectionResponse does not exist');
        }
        
        $reflection = new \ReflectionClass($collectionClass);
        $getValueMethod = $reflection->getMethod('getValue');
        
        $this->assertTrue($getValueMethod->hasReturnType());
        $this->assertEquals('array', $getValueMethod->getReturnType()->getName());
        
        // Check for variadic parameter (type safety)
        $setValueMethod = $reflection->getMethod('setValue');
        $parameters = $setValueMethod->getParameters();
        
        if (count($parameters) > 0) {
            $this->assertTrue($parameters[0]->isVariadic(), 'ShareCollectionResponse should have variadic setValue parameter');
        }
    }

}
