<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Device;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DeviceQueryOptions;

/**
 * Request builder for Device
 */
class DevicesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DeviceQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DeviceQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DeviceCollectionResponse
     */
    public function get(?DeviceQueryOptions $options = null, ?array $queryParameters = null): DeviceCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DeviceCollectionResponse::class);
    }

    /**
     * Create a new Device
     *
     * @param Device $item The item to create
     * @return Device
     */
    public function post(Device $item): Device
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Device::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DeviceItemRequestBuilder
     */
    public function byId(string $id): DeviceItemRequestBuilder
    {
        return new DeviceItemRequestBuilder($this->client, $this->buildPath($id));
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
