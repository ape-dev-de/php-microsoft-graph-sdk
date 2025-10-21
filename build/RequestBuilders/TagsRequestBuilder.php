<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamworkTag;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamworkTagCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TeamworkTagQueryOptions;

/**
 * Request builder for TeamworkTag
 */
class TagsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TeamworkTagQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param TeamworkTagQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TeamworkTagCollectionResponse
     */
    public function get(?TeamworkTagQueryOptions $options = null, ?array $queryParameters = null): TeamworkTagCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TeamworkTagCollectionResponse::class);
    }

    /**
     * Create a new TeamworkTag
     *
     * @param TeamworkTag $item The item to create
     * @return TeamworkTag
     */
    public function post(TeamworkTag $item): TeamworkTag
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, TeamworkTag::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return TeamworkTagItemRequestBuilder
     */
    public function byId(string $id): TeamworkTagItemRequestBuilder
    {
        return new TeamworkTagItemRequestBuilder($this->client, $this->buildPath($id));
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
