<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PasswordAuthenticationMethod;
use ApeDevDe\MicrosoftGraphSdk\Models\PasswordAuthenticationMethodCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PasswordAuthenticationMethodQueryOptions;

/**
 * Request builder for PasswordAuthenticationMethod
 */
class PasswordMethodsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new PasswordAuthenticationMethodQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param PasswordAuthenticationMethodQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PasswordAuthenticationMethodCollectionResponse
     */
    public function get(?PasswordAuthenticationMethodQueryOptions $options = null, ?array $queryParameters = null): PasswordAuthenticationMethodCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PasswordAuthenticationMethodCollectionResponse::class);
    }

    /**
     * Create a new PasswordAuthenticationMethod
     *
     * @param PasswordAuthenticationMethod $item The item to create
     * @return PasswordAuthenticationMethod
     */
    public function post(PasswordAuthenticationMethod $item): PasswordAuthenticationMethod
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, PasswordAuthenticationMethod::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return PasswordAuthenticationMethodItemRequestBuilder
     */
    public function byId(string $id): PasswordAuthenticationMethodItemRequestBuilder
    {
        return new PasswordAuthenticationMethodItemRequestBuilder($this->client, $this->buildPath($id));
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
