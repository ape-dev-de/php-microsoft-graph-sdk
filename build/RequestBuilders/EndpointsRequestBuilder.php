<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Endpoint;
use ApeDevDe\MicrosoftGraphSdk\Models\EndpointCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\EndpointQueryOptions;

/**
 * Request builder for Endpoint
 */
class EndpointsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new EndpointQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param EndpointQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return EndpointCollectionResponse
     */
    public function get(?EndpointQueryOptions $options = null, ?array $queryParameters = null): EndpointCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, EndpointCollectionResponse::class);
    }

    /**
     * Create a new Endpoint
     *
     * @param Endpoint $item The item to create
     * @return Endpoint
     */
    public function post(Endpoint $item): Endpoint
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Endpoint::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return EndpointItemRequestBuilder
     */
    public function byId(string $id): EndpointItemRequestBuilder
    {
        return new EndpointItemRequestBuilder($this->client, $this->buildPath($id));
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
