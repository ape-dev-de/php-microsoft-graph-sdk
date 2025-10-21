<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TemporaryAccessPassAuthenticationMethod;
use ApeDevDe\MicrosoftGraphSdk\Models\TemporaryAccessPassAuthenticationMethodCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TemporaryAccessPassAuthenticationMethodQueryOptions;

/**
 * Request builder for TemporaryAccessPassAuthenticationMethod
 */
class TemporaryAccessPassMethodsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TemporaryAccessPassAuthenticationMethodQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param TemporaryAccessPassAuthenticationMethodQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TemporaryAccessPassAuthenticationMethodCollectionResponse
     */
    public function get(?TemporaryAccessPassAuthenticationMethodQueryOptions $options = null, ?array $queryParameters = null): TemporaryAccessPassAuthenticationMethodCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TemporaryAccessPassAuthenticationMethodCollectionResponse::class);
    }

    /**
     * Create a new TemporaryAccessPassAuthenticationMethod
     *
     * @param TemporaryAccessPassAuthenticationMethod $item The item to create
     * @return TemporaryAccessPassAuthenticationMethod
     */
    public function post(TemporaryAccessPassAuthenticationMethod $item): TemporaryAccessPassAuthenticationMethod
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, TemporaryAccessPassAuthenticationMethod::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return TemporaryAccessPassAuthenticationMethodItemRequestBuilder
     */
    public function byId(string $id): TemporaryAccessPassAuthenticationMethodItemRequestBuilder
    {
        return new TemporaryAccessPassAuthenticationMethodItemRequestBuilder($this->client, $this->buildPath($id));
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
