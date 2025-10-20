<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Teamwork;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamworkCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TeamworkQueryOptions;

/**
 * Request builder for Teamwork collection
 */
class TeamworkRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TeamworkQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param TeamworkQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TeamworkCollectionResponse
     */
    public function get(?TeamworkQueryOptions $options = null, ?array $queryParameters = null): TeamworkCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TeamworkCollectionResponse::class);
    }

    /**
     * Create a new Teamwork
     *
     * @param Teamwork $item The item to create
     * @return Teamwork
     */
    public function post(Teamwork $item): Teamwork
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Teamwork::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return TeamworkItemRequestBuilder
     */
    public function byId(string $id): TeamworkItemRequestBuilder
    {
        return new TeamworkItemRequestBuilder($this->client, $this->buildPath($id));
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
