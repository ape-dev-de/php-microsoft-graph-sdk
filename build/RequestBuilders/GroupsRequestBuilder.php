<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Group;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\GroupQueryOptions;

/**
 * Request builder for Group collection
 */
class GroupsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new GroupQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param GroupQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return GroupCollectionResponse
     */
    public function get(?GroupQueryOptions $options = null, ?array $queryParameters = null): GroupCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, GroupCollectionResponse::class);
    }

    /**
     * Create a new Group
     *
     * @param Group $item The item to create
     * @return Group
     */
    public function post(Group $item): Group
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Group::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return GroupItemRequestBuilder
     */
    public function byId(string $id): GroupItemRequestBuilder
    {
        return new GroupItemRequestBuilder($this->client, $this->buildPath($id));
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
