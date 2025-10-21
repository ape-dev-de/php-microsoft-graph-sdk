<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceCompliancePolicyState;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceCompliancePolicyStateCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DeviceCompliancePolicyStateQueryOptions;

/**
 * Request builder for DeviceCompliancePolicyState
 */
class DeviceCompliancePolicyStatesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DeviceCompliancePolicyStateQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DeviceCompliancePolicyStateQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DeviceCompliancePolicyStateCollectionResponse
     */
    public function get(?DeviceCompliancePolicyStateQueryOptions $options = null, ?array $queryParameters = null): DeviceCompliancePolicyStateCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DeviceCompliancePolicyStateCollectionResponse::class);
    }

    /**
     * Create a new DeviceCompliancePolicyState
     *
     * @param DeviceCompliancePolicyState $item The item to create
     * @return DeviceCompliancePolicyState
     */
    public function post(DeviceCompliancePolicyState $item): DeviceCompliancePolicyState
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DeviceCompliancePolicyState::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DeviceCompliancePolicyStateItemRequestBuilder
     */
    public function byId(string $id): DeviceCompliancePolicyStateItemRequestBuilder
    {
        return new DeviceCompliancePolicyStateItemRequestBuilder($this->client, $this->buildPath($id));
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
