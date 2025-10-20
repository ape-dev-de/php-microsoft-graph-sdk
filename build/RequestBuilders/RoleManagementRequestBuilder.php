<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\RoleManagement;
use ApeDevDe\MicrosoftGraphSdk\Models\RoleManagementCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\RoleManagementQueryOptions;

/**
 * Request builder for RoleManagement collection
 */
class RoleManagementRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new RoleManagementQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param RoleManagementQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return RoleManagementCollectionResponse
     */
    public function get(?RoleManagementQueryOptions $options = null, ?array $queryParameters = null): RoleManagementCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, RoleManagementCollectionResponse::class);
    }

    /**
     * Create a new RoleManagement
     *
     * @param RoleManagement $item The item to create
     * @return RoleManagement
     */
    public function post(RoleManagement $item): RoleManagement
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, RoleManagement::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return RoleManagementItemRequestBuilder
     */
    public function byId(string $id): RoleManagementItemRequestBuilder
    {
        return new RoleManagementItemRequestBuilder($this->client, $this->buildPath($id));
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
