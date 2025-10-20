<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethodsPolicy;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethodsPolicyCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AuthenticationMethodsPolicyQueryOptions;

/**
 * Request builder for AuthenticationMethodsPolicy collection
 */
class AuthenticationMethodsPolicyRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AuthenticationMethodsPolicyQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param AuthenticationMethodsPolicyQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AuthenticationMethodsPolicyCollectionResponse
     */
    public function get(?AuthenticationMethodsPolicyQueryOptions $options = null, ?array $queryParameters = null): AuthenticationMethodsPolicyCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AuthenticationMethodsPolicyCollectionResponse::class);
    }

    /**
     * Create a new AuthenticationMethodsPolicy
     *
     * @param AuthenticationMethodsPolicy $item The item to create
     * @return AuthenticationMethodsPolicy
     */
    public function post(AuthenticationMethodsPolicy $item): AuthenticationMethodsPolicy
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AuthenticationMethodsPolicy::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return AuthenticationMethodsPolicyItemRequestBuilder
     */
    public function byId(string $id): AuthenticationMethodsPolicyItemRequestBuilder
    {
        return new AuthenticationMethodsPolicyItemRequestBuilder($this->client, $this->buildPath($id));
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
