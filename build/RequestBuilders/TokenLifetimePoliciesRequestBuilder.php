<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TokenLifetimePolicy;
use ApeDevDe\MicrosoftGraphSdk\Models\TokenLifetimePolicyCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TokenLifetimePolicyQueryOptions;

/**
 * Request builder for TokenLifetimePolicy
 */
class TokenLifetimePoliciesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TokenLifetimePolicyQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param TokenLifetimePolicyQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TokenLifetimePolicyCollectionResponse
     */
    public function get(?TokenLifetimePolicyQueryOptions $options = null, ?array $queryParameters = null): TokenLifetimePolicyCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TokenLifetimePolicyCollectionResponse::class);
    }

    /**
     * Create a new TokenLifetimePolicy
     *
     * @param TokenLifetimePolicy $item The item to create
     * @return TokenLifetimePolicy
     */
    public function post(TokenLifetimePolicy $item): TokenLifetimePolicy
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, TokenLifetimePolicy::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ApplicationItemRequestBuilder
     */
    public function byId(string $id): ApplicationItemRequestBuilder
    {
        return new ApplicationItemRequestBuilder($this->client, $this->buildPath($id));
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
