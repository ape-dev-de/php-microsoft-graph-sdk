<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryRole;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryRoleCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DirectoryRoleQueryOptions;

/**
 * Request builder for DirectoryRole collection
 */
class DirectoryRolesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DirectoryRoleQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DirectoryRoleQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DirectoryRoleCollectionResponse
     */
    public function get(?DirectoryRoleQueryOptions $options = null, ?array $queryParameters = null): DirectoryRoleCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DirectoryRoleCollectionResponse::class);
    }

    /**
     * Create a new DirectoryRole
     *
     * @param DirectoryRole $item The item to create
     * @return DirectoryRole
     */
    public function post(DirectoryRole $item): DirectoryRole
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DirectoryRole::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DirectoryRoleItemRequestBuilder
     */
    public function byId(string $id): DirectoryRoleItemRequestBuilder
    {
        return new DirectoryRoleItemRequestBuilder($this->client, $this->buildPath($id));
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
