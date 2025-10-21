<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Tests\Collections;

use ApeDevDe\MicrosoftGraphSdk\Tests\GraphTestCase;

/**
 * Tests for Users collection
 */
class UsersTest extends GraphTestCase
{
    public function testCanAccessBuilder(): void
    {
        $builder = self::$client->users();
        $this->assertNotNull($builder);
    }

    public function testCanGetCollection(): void
    {
        $collection = self::$client->users()->get();
        
        $this->assertNotNull($collection);
        $this->assertIsArray($collection->getValue());
    }

    public function testCanGetCollectionWithTop(): void
    {
        $collection = self::$client->users()->get(
            queryParameters: ['$top' => 1]
        );
        
        $this->assertNotNull($collection);
        $this->assertIsArray($collection->getValue());
        $this->assertLessThanOrEqual(1, count($collection->getValue()));
    }

    public function testCanGetCollectionWithSelect(): void
    {
        $collection = self::$client->users()->get(
            queryParameters: ['$select' => 'id', '$top' => 1]
        );
        
        $this->assertNotNull($collection);
        $this->assertIsArray($collection->getValue());
    }

    public function testCanGetItemById(): void
    {
        // Get first item from collection
        $collection = self::$client->users()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Get item by ID
        $fetchedItem = self::$client->users()->byId($itemId)->get();
        
        $this->assertNotNull($fetchedItem);
        $this->assertEquals($itemId, $fetchedItem->getId());
    }

    public function testQueryOptionsHasFieldConstants(): void
    {
        $queryOptionsClass = 'ApeDevDe\\MicrosoftGraphSdk\\QueryOptions\\UsersQueryOptions';
        
        if (!class_exists($queryOptionsClass)) {
            $this->markTestSkipped("QueryOptions class does not exist: {$queryOptionsClass}");
        }
        
        $reflection = new \ReflectionClass($queryOptionsClass);
        $constants = $reflection->getConstants();
        
        $this->assertNotEmpty($constants, 'UsersQueryOptions should have field constants');
        
        // Check that constants follow the FIELD_* pattern
        $fieldConstants = array_filter(array_keys($constants), fn($key) => str_starts_with($key, 'FIELD_'));
        $this->assertNotEmpty($fieldConstants, 'UsersQueryOptions should have FIELD_* constants');
    }

    public function testCollectionResponseHasTypeSafety(): void
    {
        $collectionClass = 'ApeDevDe\\MicrosoftGraphSdk\\Models\\UserCollectionResponse';
        
        if (!class_exists($collectionClass)) {
            $this->markTestSkipped('UserCollectionResponse does not exist');
        }
        
        $reflection = new \ReflectionClass($collectionClass);
        $getValueMethod = $reflection->getMethod('getValue');
        
        $this->assertTrue($getValueMethod->hasReturnType());
        $this->assertEquals('array', $getValueMethod->getReturnType()->getName());
        
        // Check for variadic parameter (type safety)
        $setValueMethod = $reflection->getMethod('setValue');
        $parameters = $setValueMethod->getParameters();
        
        if (count($parameters) > 0) {
            $this->assertTrue($parameters[0]->isVariadic(), 'UserCollectionResponse should have variadic setValue parameter');
        }
    }

    public function testCanAccessActivitiesSubpath(): void
    {
        // Get first item from collection
        $collection = self::$client->users()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Access subpath and get data
        $result = self::$client->users()->byId($itemId)->activities()->get();
        $this->assertNotNull($result);
    }

    public function testCanAccessAgreementAcceptancesSubpath(): void
    {
        // Get first item from collection
        $collection = self::$client->users()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Access subpath and get data
        $result = self::$client->users()->byId($itemId)->agreementAcceptances()->get();
        $this->assertNotNull($result);
    }

    public function testCanAccessAppRoleAssignmentsSubpath(): void
    {
        // Get first item from collection
        $collection = self::$client->users()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Access subpath and get data
        $result = self::$client->users()->byId($itemId)->appRoleAssignments()->get();
        $this->assertNotNull($result);
    }

    public function testCanAccessAuthenticationEmailMethodsNestedSubpath(): void
    {
        // Get first item from collection
        $collection = self::$client->users()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Access nested subpath and get data
        $result = self::$client->users()->byId($itemId)->authentication()->emailMethods()->get();
        $this->assertNotNull($result);
    }

    public function testCanAccessAuthenticationFido2MethodsNestedSubpath(): void
    {
        // Get first item from collection
        $collection = self::$client->users()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Access nested subpath and get data
        $result = self::$client->users()->byId($itemId)->authentication()->fido2Methods()->get();
        $this->assertNotNull($result);
    }

}
