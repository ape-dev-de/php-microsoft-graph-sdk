<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SharedWithChannelTeamInfo;
use ApeDevDe\MicrosoftGraphSdk\Models\SharedWithChannelTeamInfoCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SharedWithChannelTeamInfoQueryOptions;

/**
 * Request builder for SharedWithChannelTeamInfo
 */
class SharedWithTeamsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SharedWithChannelTeamInfoQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SharedWithChannelTeamInfoQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SharedWithChannelTeamInfoCollectionResponse
     */
    public function get(?SharedWithChannelTeamInfoQueryOptions $options = null, ?array $queryParameters = null): SharedWithChannelTeamInfoCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SharedWithChannelTeamInfoCollectionResponse::class);
    }

    /**
     * Create a new SharedWithChannelTeamInfo
     *
     * @param SharedWithChannelTeamInfo $item The item to create
     * @return SharedWithChannelTeamInfo
     */
    public function post(SharedWithChannelTeamInfo $item): SharedWithChannelTeamInfo
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, SharedWithChannelTeamInfo::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SharedWithChannelTeamInfoItemRequestBuilder
     */
    public function byId(string $id): SharedWithChannelTeamInfoItemRequestBuilder
    {
        return new SharedWithChannelTeamInfoItemRequestBuilder($this->client, $this->buildPath($id));
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
