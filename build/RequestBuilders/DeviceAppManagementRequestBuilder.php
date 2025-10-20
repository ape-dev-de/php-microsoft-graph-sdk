<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceAppManagement;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceAppManagementCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DeviceAppManagementQueryOptions;

/**
 * Request builder for DeviceAppManagement collection
 */
class DeviceAppManagementRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DeviceAppManagementQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DeviceAppManagementQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DeviceAppManagementCollectionResponse
     */
    public function get(?DeviceAppManagementQueryOptions $options = null, ?array $queryParameters = null): DeviceAppManagementCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DeviceAppManagementCollectionResponse::class);
    }

    /**
     * Create a new DeviceAppManagement
     *
     * @param DeviceAppManagement $item The item to create
     * @return DeviceAppManagement
     */
    public function post(DeviceAppManagement $item): DeviceAppManagement
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DeviceAppManagement::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DeviceAppManagementItemRequestBuilder
     */
    public function byId(string $id): DeviceAppManagementItemRequestBuilder
    {
        return new DeviceAppManagementItemRequestBuilder($this->client, $this->buildPath($id));
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
