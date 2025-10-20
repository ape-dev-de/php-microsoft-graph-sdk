<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceManagement;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceManagementCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DeviceManagementQueryOptions;

/**
 * Request builder for DeviceManagement collection
 */
class DeviceManagementRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DeviceManagementQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DeviceManagementQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DeviceManagementCollectionResponse
     */
    public function get(?DeviceManagementQueryOptions $options = null, ?array $queryParameters = null): DeviceManagementCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DeviceManagementCollectionResponse::class);
    }

    /**
     * Create a new DeviceManagement
     *
     * @param DeviceManagement $item The item to create
     * @return DeviceManagement
     */
    public function post(DeviceManagement $item): DeviceManagement
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DeviceManagement::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DeviceManagementItemRequestBuilder
     */
    public function byId(string $id): DeviceManagementItemRequestBuilder
    {
        return new DeviceManagementItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->buildPath('$count'));
        return (int) $response->getBody()->getContents();
    }

}
