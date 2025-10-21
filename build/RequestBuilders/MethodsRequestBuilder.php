<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethod;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethodCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AuthenticationMethodQueryOptions;

/**
 * Request builder for AuthenticationMethod
 */
class MethodsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AuthenticationMethodQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param AuthenticationMethodQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AuthenticationMethodCollectionResponse
     */
    public function get(?AuthenticationMethodQueryOptions $options = null, ?array $queryParameters = null): AuthenticationMethodCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AuthenticationMethodCollectionResponse::class);
    }

    /**
     * Create a new AuthenticationMethod
     *
     * @param AuthenticationMethod $item The item to create
     * @return AuthenticationMethod
     */
    public function post(AuthenticationMethod $item): AuthenticationMethod
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AuthenticationMethod::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return AuthenticationMethodItemRequestBuilder
     */
    public function byId(string $id): AuthenticationMethodItemRequestBuilder
    {
        return new AuthenticationMethodItemRequestBuilder($this->client, $this->buildPath($id));
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
