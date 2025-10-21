<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Permission;
use ApeDevDe\MicrosoftGraphSdk\Models\PermissionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PermissionQueryOptions;

/**
 * Request builder for Permission
 */
class PermissionsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new PermissionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param PermissionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PermissionCollectionResponse
     */
    public function get(?PermissionQueryOptions $options = null, ?array $queryParameters = null): PermissionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PermissionCollectionResponse::class);
    }

    /**
     * Create a new Permission
     *
     * @param Permission $item The item to create
     * @return Permission
     */
    public function post(Permission $item): Permission
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Permission::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return PermissionItemRequestBuilder
     */
    public function byId(string $id): PermissionItemRequestBuilder
    {
        return new PermissionItemRequestBuilder($this->client, $this->buildPath($id));
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
