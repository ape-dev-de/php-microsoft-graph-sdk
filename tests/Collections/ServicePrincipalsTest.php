<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Tests\Collections;

use ApeDevDe\MicrosoftGraphSdk\Tests\GraphTestCase;

/**
 * Tests for ServicePrincipals collection
 */
class ServicePrincipalsTest extends GraphTestCase
{
    public function testCanAccessBuilder(): void
    {
        $builder = self::$client->servicePrincipals();
        $this->assertNotNull($builder);
    }

    public function testCanGetCollection(): void
    {
        $collection = self::$client->servicePrincipals()->get();
        
        $this->assertNotNull($collection);
        $this->assertIsArray($collection->getValue());
    }

    public function testCanGetCollectionWithTop(): void
    {
        $collection = self::$client->servicePrincipals()->get(
            queryParameters: ['$top' => 1]
        );
        
        $this->assertNotNull($collection);
        $this->assertIsArray($collection->getValue());
        $this->assertLessThanOrEqual(1, count($collection->getValue()));
    }

    public function testCanGetCollectionWithSelect(): void
    {
        $collection = self::$client->servicePrincipals()->get(
            queryParameters: ['$select' => 'id', '$top' => 1]
        );
        
        $this->assertNotNull($collection);
        $this->assertIsArray($collection->getValue());
    }

    public function testCanGetItemById(): void
    {
        // Get first item from collection
        $collection = self::$client->servicePrincipals()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Get item by ID
        $fetchedItem = self::$client->servicePrincipals()->byId($itemId)->get();
        
        $this->assertNotNull($fetchedItem);
        $this->assertEquals($itemId, $fetchedItem->getId());
    }

    public function testQueryOptionsHasFieldConstants(): void
    {
        $queryOptionsClass = 'ApeDevDe\\MicrosoftGraphSdk\\QueryOptions\\ServicePrincipalsQueryOptions';
        
        if (!class_exists($queryOptionsClass)) {
            $this->markTestSkipped("QueryOptions class does not exist: {$queryOptionsClass}");
        }
        
        $reflection = new \ReflectionClass($queryOptionsClass);
        $constants = $reflection->getConstants();
        
        $this->assertNotEmpty($constants, 'ServicePrincipalsQueryOptions should have field constants');
        
        // Check that constants follow the FIELD_* pattern
        $fieldConstants = array_filter(array_keys($constants), fn($key) => str_starts_with($key, 'FIELD_'));
        $this->assertNotEmpty($fieldConstants, 'ServicePrincipalsQueryOptions should have FIELD_* constants');
    }

    public function testCollectionResponseHasTypeSafety(): void
    {
        $collectionClass = 'ApeDevDe\\MicrosoftGraphSdk\\Models\\ServicePrincipalCollectionResponse';
        
        if (!class_exists($collectionClass)) {
            $this->markTestSkipped('ServicePrincipalCollectionResponse does not exist');
        }
        
        $reflection = new \ReflectionClass($collectionClass);
        $getValueMethod = $reflection->getMethod('getValue');
        
        $this->assertTrue($getValueMethod->hasReturnType());
        $this->assertEquals('array', $getValueMethod->getReturnType()->getName());
        
        // Check for variadic parameter (type safety)
        $setValueMethod = $reflection->getMethod('setValue');
        $parameters = $setValueMethod->getParameters();
        
        if (count($parameters) > 0) {
            $this->assertTrue($parameters[0]->isVariadic(), 'ServicePrincipalCollectionResponse should have variadic setValue parameter');
        }
    }

    public function testCanAccessAppManagementPoliciesSubpath(): void
    {
        // Get first item from collection
        $collection = self::$client->servicePrincipals()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Access subpath and get data
        $result = self::$client->servicePrincipals()->byId($itemId)->appManagementPolicies()->get();
        $this->assertNotNull($result);
    }

    public function testCanAccessAppRoleAssignedToSubpath(): void
    {
        // Get first item from collection
        $collection = self::$client->servicePrincipals()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Access subpath and get data
        $result = self::$client->servicePrincipals()->byId($itemId)->appRoleAssignedTo()->get();
        $this->assertNotNull($result);
    }

    public function testCanAccessAppRoleAssignmentsSubpath(): void
    {
        // Get first item from collection
        $collection = self::$client->servicePrincipals()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Access subpath and get data
        $result = self::$client->servicePrincipals()->byId($itemId)->appRoleAssignments()->get();
        $this->assertNotNull($result);
    }

    public function testCanAccessRemoteDesktopSecurityConfigurationTargetDeviceGroupsNestedSubpath(): void
    {
        // Get first item from collection
        $collection = self::$client->servicePrincipals()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Access nested subpath and get data
        $result = self::$client->servicePrincipals()->byId($itemId)->remoteDesktopSecurityConfiguration()->targetDeviceGroups()->get();
        $this->assertNotNull($result);
    }

    public function testCanAccessSynchronizationJobsNestedSubpath(): void
    {
        // Get first item from collection
        $collection = self::$client->servicePrincipals()->get(
            queryParameters: ['$top' => 1]
        );
        
        if (empty($collection->getValue())) {
            $this->markTestSkipped('No items in collection');
        }
        
        $item = $collection->getValue()[0];
        $itemId = $item->getId();
        
        // Access nested subpath and get data
        $result = self::$client->servicePrincipals()->byId($itemId)->synchronization()->jobs()->get();
        $this->assertNotNull($result);
    }

}
