<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityProvider;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityProviderCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\IdentityProviderQueryOptions;

/**
 * Request builder for IdentityProvider
 */
class IdentityProvidersRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new IdentityProviderQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param IdentityProviderQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return IdentityProviderCollectionResponse
     */
    public function get(?IdentityProviderQueryOptions $options = null, ?array $queryParameters = null): IdentityProviderCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, IdentityProviderCollectionResponse::class);
    }

    /**
     * Create a new IdentityProvider
     *
     * @param IdentityProvider $item The item to create
     * @return IdentityProvider
     */
    public function post(IdentityProvider $item): IdentityProvider
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, IdentityProvider::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return IdentityProviderItemRequestBuilder
     */
    public function byId(string $id): IdentityProviderItemRequestBuilder
    {
        return new IdentityProviderItemRequestBuilder($this->client, $this->buildPath($id));
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
