<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AssociatedTeamInfo;
use ApeDevDe\MicrosoftGraphSdk\Models\AssociatedTeamInfoCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AssociatedTeamInfoQueryOptions;

/**
 * Request builder for AssociatedTeamInfo
 */
class AssociatedTeamsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AssociatedTeamInfoQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param AssociatedTeamInfoQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AssociatedTeamInfoCollectionResponse
     */
    public function get(?AssociatedTeamInfoQueryOptions $options = null, ?array $queryParameters = null): AssociatedTeamInfoCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AssociatedTeamInfoCollectionResponse::class);
    }

    /**
     * Create a new AssociatedTeamInfo
     *
     * @param AssociatedTeamInfo $item The item to create
     * @return AssociatedTeamInfo
     */
    public function post(AssociatedTeamInfo $item): AssociatedTeamInfo
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AssociatedTeamInfo::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return AssociatedTeamInfoItemRequestBuilder
     */
    public function byId(string $id): AssociatedTeamInfoItemRequestBuilder
    {
        return new AssociatedTeamInfoItemRequestBuilder($this->client, $this->buildPath($id));
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
