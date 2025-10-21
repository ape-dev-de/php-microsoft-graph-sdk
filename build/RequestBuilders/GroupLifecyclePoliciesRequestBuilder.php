<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupLifecyclePolicy;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupLifecyclePolicyCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\GroupLifecyclePolicyQueryOptions;

/**
 * Request builder for GroupLifecyclePolicy
 */
class GroupLifecyclePoliciesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new GroupLifecyclePolicyQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param GroupLifecyclePolicyQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return GroupLifecyclePolicyCollectionResponse
     */
    public function get(?GroupLifecyclePolicyQueryOptions $options = null, ?array $queryParameters = null): GroupLifecyclePolicyCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, GroupLifecyclePolicyCollectionResponse::class);
    }

    /**
     * Create a new GroupLifecyclePolicy
     *
     * @param GroupLifecyclePolicy $item The item to create
     * @return GroupLifecyclePolicy
     */
    public function post(GroupLifecyclePolicy $item): GroupLifecyclePolicy
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, GroupLifecyclePolicy::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return GroupLifecyclePolicyItemRequestBuilder
     */
    public function byId(string $id): GroupLifecyclePolicyItemRequestBuilder
    {
        return new GroupLifecyclePolicyItemRequestBuilder($this->client, $this->buildPath($id));
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
