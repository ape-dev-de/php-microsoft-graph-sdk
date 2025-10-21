<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedDevice;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedDeviceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ManagedDeviceQueryOptions;

/**
 * Request builder for ManagedDevice
 */
class ManagedDevicesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ManagedDeviceQueryOptions())->top(10)->select(['displayName', 'mail']))
     * 2. Array parameters: get(queryParameters: ['$top' => 10, '$select' => 'displayName,mail'])
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $filter: Filter results
     * - $orderby: Order results
     * - $top: Limit number of results
     * - $skip: Skip number of results
     * - $expand: Expand related resources
     * - $search: Search query
     * - $count: Include count of items
     *
     * @param ManagedDeviceQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ManagedDeviceCollectionResponse
     */
    public function get(?ManagedDeviceQueryOptions $options = null, ?array $queryParameters = null): ManagedDeviceCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ManagedDeviceCollectionResponse::class);
    }

    /**
     * Create a new ManagedDevice
     *
     * @param ManagedDevice $item The item to create
     * @return ManagedDevice
     */
    public function post(ManagedDevice $item): ManagedDevice
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ManagedDevice::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ManagedDeviceItemRequestBuilder
     */
    public function byId(string $id): ManagedDeviceItemRequestBuilder
    {
        return new ManagedDeviceItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->getFullPath() . '/$count');
        return (int) $response->getBody()->getContents();
    }

}
