<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OAuth2PermissionGrant;
use ApeDevDe\MicrosoftGraphSdk\Models\OAuth2PermissionGrantCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OAuth2PermissionGrantQueryOptions;

/**
 * Request builder for OAuth2PermissionGrant
 */
class Oauth2PermissionGrantsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new OAuth2PermissionGrantQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param OAuth2PermissionGrantQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return OAuth2PermissionGrantCollectionResponse
     */
    public function get(?OAuth2PermissionGrantQueryOptions $options = null, ?array $queryParameters = null): OAuth2PermissionGrantCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, OAuth2PermissionGrantCollectionResponse::class);
    }

    /**
     * Create a new OAuth2PermissionGrant
     *
     * @param OAuth2PermissionGrant $item The item to create
     * @return OAuth2PermissionGrant
     */
    public function post(OAuth2PermissionGrant $item): OAuth2PermissionGrant
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, OAuth2PermissionGrant::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return OAuth2PermissionGrantItemRequestBuilder
     */
    public function byId(string $id): OAuth2PermissionGrantItemRequestBuilder
    {
        return new OAuth2PermissionGrantItemRequestBuilder($this->client, $this->buildPath($id));
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
