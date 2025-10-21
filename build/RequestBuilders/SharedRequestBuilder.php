<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SharedInsight;
use ApeDevDe\MicrosoftGraphSdk\Models\SharedInsightCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SharedInsightQueryOptions;

/**
 * Request builder for SharedInsight
 */
class SharedRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SharedInsightQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SharedInsightQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SharedInsightCollectionResponse
     */
    public function get(?SharedInsightQueryOptions $options = null, ?array $queryParameters = null): SharedInsightCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SharedInsightCollectionResponse::class);
    }

    /**
     * Create a new SharedInsight
     *
     * @param SharedInsight $item The item to create
     * @return SharedInsight
     */
    public function post(SharedInsight $item): SharedInsight
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, SharedInsight::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SharedInsightItemRequestBuilder
     */
    public function byId(string $id): SharedInsightItemRequestBuilder
    {
        return new SharedInsightItemRequestBuilder($this->client, $this->buildPath($id));
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
