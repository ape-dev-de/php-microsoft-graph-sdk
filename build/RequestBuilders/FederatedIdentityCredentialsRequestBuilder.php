<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\FederatedIdentityCredential;
use ApeDevDe\MicrosoftGraphSdk\Models\FederatedIdentityCredentialCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\FederatedIdentityCredentialQueryOptions;

/**
 * Request builder for FederatedIdentityCredential
 */
class FederatedIdentityCredentialsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new FederatedIdentityCredentialQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param FederatedIdentityCredentialQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return FederatedIdentityCredentialCollectionResponse
     */
    public function get(?FederatedIdentityCredentialQueryOptions $options = null, ?array $queryParameters = null): FederatedIdentityCredentialCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, FederatedIdentityCredentialCollectionResponse::class);
    }

    /**
     * Create a new FederatedIdentityCredential
     *
     * @param FederatedIdentityCredential $item The item to create
     * @return FederatedIdentityCredential
     */
    public function post(FederatedIdentityCredential $item): FederatedIdentityCredential
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, FederatedIdentityCredential::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return FederatedIdentityCredentialItemRequestBuilder
     */
    public function byId(string $id): FederatedIdentityCredentialItemRequestBuilder
    {
        return new FederatedIdentityCredentialItemRequestBuilder($this->client, $this->buildPath($id));
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
