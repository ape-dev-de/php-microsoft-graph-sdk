<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SchedulingGroup;
use ApeDevDe\MicrosoftGraphSdk\Models\SchedulingGroupCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SchedulingGroupQueryOptions;

/**
 * Request builder for SchedulingGroup
 */
class SchedulingGroupsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SchedulingGroupQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SchedulingGroupQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SchedulingGroupCollectionResponse
     */
    public function get(?SchedulingGroupQueryOptions $options = null, ?array $queryParameters = null): SchedulingGroupCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SchedulingGroupCollectionResponse::class);
    }

    /**
     * Create a new SchedulingGroup
     *
     * @param SchedulingGroup $item The item to create
     * @return SchedulingGroup
     */
    public function post(SchedulingGroup $item): SchedulingGroup
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, SchedulingGroup::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SchedulingGroupItemRequestBuilder
     */
    public function byId(string $id): SchedulingGroupItemRequestBuilder
    {
        return new SchedulingGroupItemRequestBuilder($this->client, $this->buildPath($id));
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
