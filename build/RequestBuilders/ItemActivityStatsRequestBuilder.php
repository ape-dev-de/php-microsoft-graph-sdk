<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ItemActivityStat;
use ApeDevDe\MicrosoftGraphSdk\Models\ItemActivityStatCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ItemActivityStatQueryOptions;

/**
 * Request builder for ItemActivityStat
 */
class ItemActivityStatsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ItemActivityStatQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ItemActivityStatQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ItemActivityStatCollectionResponse
     */
    public function get(?ItemActivityStatQueryOptions $options = null, ?array $queryParameters = null): ItemActivityStatCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ItemActivityStatCollectionResponse::class);
    }

    /**
     * Create a new ItemActivityStat
     *
     * @param ItemActivityStat $item The item to create
     * @return ItemActivityStat
     */
    public function post(ItemActivityStat $item): ItemActivityStat
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ItemActivityStat::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ItemActivityStatItemRequestBuilder
     */
    public function byId(string $id): ItemActivityStatItemRequestBuilder
    {
        return new ItemActivityStatItemRequestBuilder($this->client, $this->buildPath($id));
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
