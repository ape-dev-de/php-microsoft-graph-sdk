<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UsedInsight;
use ApeDevDe\MicrosoftGraphSdk\Models\UsedInsightCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\UsedInsightQueryOptions;

/**
 * Request builder for UsedInsight
 */
class UsedRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new UsedInsightQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param UsedInsightQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return UsedInsightCollectionResponse
     */
    public function get(?UsedInsightQueryOptions $options = null, ?array $queryParameters = null): UsedInsightCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, UsedInsightCollectionResponse::class);
    }

    /**
     * Create a new UsedInsight
     *
     * @param UsedInsight $item The item to create
     * @return UsedInsight
     */
    public function post(UsedInsight $item): UsedInsight
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, UsedInsight::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return UsedInsightItemRequestBuilder
     */
    public function byId(string $id): UsedInsightItemRequestBuilder
    {
        return new UsedInsightItemRequestBuilder($this->client, $this->buildPath($id));
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
