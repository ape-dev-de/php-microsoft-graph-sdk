<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Trending;
use ApeDevDe\MicrosoftGraphSdk\Models\TrendingCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TrendingQueryOptions;

/**
 * Request builder for Trending
 */
class TrendingRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TrendingQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param TrendingQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TrendingCollectionResponse
     */
    public function get(?TrendingQueryOptions $options = null, ?array $queryParameters = null): TrendingCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TrendingCollectionResponse::class);
    }

    /**
     * Create a new Trending
     *
     * @param Trending $item The item to create
     * @return Trending
     */
    public function post(Trending $item): Trending
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Trending::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return TrendingItemRequestBuilder
     */
    public function byId(string $id): TrendingItemRequestBuilder
    {
        return new TrendingItemRequestBuilder($this->client, $this->buildPath($id));
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
