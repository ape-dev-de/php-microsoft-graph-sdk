<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PermissionGrant;
use ApeDevDe\MicrosoftGraphSdk\Models\PermissionGrantCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PermissionGrantQueryOptions;

/**
 * Request builder for PermissionGrant collection
 */
class PermissionGrantsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new PermissionGrantQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param PermissionGrantQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PermissionGrantCollectionResponse
     */
    public function get(?PermissionGrantQueryOptions $options = null, ?array $queryParameters = null): PermissionGrantCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PermissionGrantCollectionResponse::class);
    }

    /**
     * Create a new PermissionGrant
     *
     * @param PermissionGrant $item The item to create
     * @return PermissionGrant
     */
    public function post(PermissionGrant $item): PermissionGrant
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, PermissionGrant::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return PermissionGrantItemRequestBuilder
     */
    public function byId(string $id): PermissionGrantItemRequestBuilder
    {
        return new PermissionGrantItemRequestBuilder($this->client, $this->buildPath($id));
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
