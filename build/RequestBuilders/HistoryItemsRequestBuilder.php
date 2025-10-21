<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ActivityHistoryItem;
use ApeDevDe\MicrosoftGraphSdk\Models\ActivityHistoryItemCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ActivityHistoryItemQueryOptions;

/**
 * Request builder for ActivityHistoryItem
 */
class HistoryItemsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ActivityHistoryItemQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ActivityHistoryItemQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ActivityHistoryItemCollectionResponse
     */
    public function get(?ActivityHistoryItemQueryOptions $options = null, ?array $queryParameters = null): ActivityHistoryItemCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ActivityHistoryItemCollectionResponse::class);
    }

    /**
     * Create a new ActivityHistoryItem
     *
     * @param ActivityHistoryItem $item The item to create
     * @return ActivityHistoryItem
     */
    public function post(ActivityHistoryItem $item): ActivityHistoryItem
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ActivityHistoryItem::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ActivityHistoryItemItemRequestBuilder
     */
    public function byId(string $id): ActivityHistoryItemItemRequestBuilder
    {
        return new ActivityHistoryItemItemRequestBuilder($this->client, $this->buildPath($id));
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
