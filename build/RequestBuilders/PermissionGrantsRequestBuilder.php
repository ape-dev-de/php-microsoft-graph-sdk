<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ResourceSpecificPermissionGrant;
use ApeDevDe\MicrosoftGraphSdk\Models\ResourceSpecificPermissionGrantCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ResourceSpecificPermissionGrantQueryOptions;

/**
 * Request builder for ResourceSpecificPermissionGrant
 */
class PermissionGrantsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ResourceSpecificPermissionGrantQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ResourceSpecificPermissionGrantQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ResourceSpecificPermissionGrantCollectionResponse
     */
    public function get(?ResourceSpecificPermissionGrantQueryOptions $options = null, ?array $queryParameters = null): ResourceSpecificPermissionGrantCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ResourceSpecificPermissionGrantCollectionResponse::class);
    }

    /**
     * Create a new ResourceSpecificPermissionGrant
     *
     * @param ResourceSpecificPermissionGrant $item The item to create
     * @return ResourceSpecificPermissionGrant
     */
    public function post(ResourceSpecificPermissionGrant $item): ResourceSpecificPermissionGrant
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ResourceSpecificPermissionGrant::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ResourceSpecificPermissionGrantItemRequestBuilder
     */
    public function byId(string $id): ResourceSpecificPermissionGrantItemRequestBuilder
    {
        return new ResourceSpecificPermissionGrantItemRequestBuilder($this->client, $this->buildPath($id));
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
