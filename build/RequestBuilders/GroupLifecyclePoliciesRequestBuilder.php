<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupLifecyclePolicie;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupLifecyclePolicieCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\GroupLifecyclePolicieQueryOptions;

/**
 * Request builder for GroupLifecyclePolicie collection
 */
class GroupLifecyclePoliciesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new GroupLifecyclePolicieQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param GroupLifecyclePolicieQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return GroupLifecyclePolicieCollectionResponse
     */
    public function get(?GroupLifecyclePolicieQueryOptions $options = null, ?array $queryParameters = null): GroupLifecyclePolicieCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, GroupLifecyclePolicieCollectionResponse::class);
    }

    /**
     * Create a new GroupLifecyclePolicie
     *
     * @param GroupLifecyclePolicie $item The item to create
     * @return GroupLifecyclePolicie
     */
    public function post(GroupLifecyclePolicie $item): GroupLifecyclePolicie
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, GroupLifecyclePolicie::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return GroupLifecyclePolicieItemRequestBuilder
     */
    public function byId(string $id): GroupLifecyclePolicieItemRequestBuilder
    {
        return new GroupLifecyclePolicieItemRequestBuilder($this->client, $this->buildPath($id));
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
