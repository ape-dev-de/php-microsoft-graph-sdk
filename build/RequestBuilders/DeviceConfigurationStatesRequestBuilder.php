<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceConfigurationState;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceConfigurationStateCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DeviceConfigurationStateQueryOptions;

/**
 * Request builder for DeviceConfigurationState
 */
class DeviceConfigurationStatesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DeviceConfigurationStateQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DeviceConfigurationStateQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DeviceConfigurationStateCollectionResponse
     */
    public function get(?DeviceConfigurationStateQueryOptions $options = null, ?array $queryParameters = null): DeviceConfigurationStateCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DeviceConfigurationStateCollectionResponse::class);
    }

    /**
     * Create a new DeviceConfigurationState
     *
     * @param DeviceConfigurationState $item The item to create
     * @return DeviceConfigurationState
     */
    public function post(DeviceConfigurationState $item): DeviceConfigurationState
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DeviceConfigurationState::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DeviceConfigurationStateItemRequestBuilder
     */
    public function byId(string $id): DeviceConfigurationStateItemRequestBuilder
    {
        return new DeviceConfigurationStateItemRequestBuilder($this->client, $this->buildPath($id));
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
