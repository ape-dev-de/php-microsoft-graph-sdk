<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Oauth2PermissionGrant;
use ApeDevDe\MicrosoftGraphSdk\Models\Oauth2PermissionGrantCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\Oauth2PermissionGrantQueryOptions;

/**
 * Request builder for Oauth2PermissionGrant collection
 */
class Oauth2PermissionGrantsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new Oauth2PermissionGrantQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param Oauth2PermissionGrantQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Oauth2PermissionGrantCollectionResponse
     */
    public function get(?Oauth2PermissionGrantQueryOptions $options = null, ?array $queryParameters = null): Oauth2PermissionGrantCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Oauth2PermissionGrantCollectionResponse::class);
    }

    /**
     * Create a new Oauth2PermissionGrant
     *
     * @param Oauth2PermissionGrant $item The item to create
     * @return Oauth2PermissionGrant
     */
    public function post(Oauth2PermissionGrant $item): Oauth2PermissionGrant
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Oauth2PermissionGrant::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return Oauth2PermissionGrantItemRequestBuilder
     */
    public function byId(string $id): Oauth2PermissionGrantItemRequestBuilder
    {
        return new Oauth2PermissionGrantItemRequestBuilder($this->client, $this->buildPath($id));
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
