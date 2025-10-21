<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Team;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TeamQueryOptions;

/**
 * Request builder for Team
 */
class JoinedTeamsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TeamQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param TeamQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TeamCollectionResponse
     */
    public function get(?TeamQueryOptions $options = null, ?array $queryParameters = null): TeamCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TeamCollectionResponse::class);
    }

    /**
     * Create a new Team
     *
     * @param Team $item The item to create
     * @return Team
     */
    public function post(Team $item): Team
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Team::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return TeamItemRequestBuilder
     */
    public function byId(string $id): TeamItemRequestBuilder
    {
        return new TeamItemRequestBuilder($this->client, $this->buildPath($id));
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
