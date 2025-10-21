<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ChecklistItem;
use ApeDevDe\MicrosoftGraphSdk\Models\ChecklistItemCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ChecklistItemQueryOptions;

/**
 * Request builder for ChecklistItem
 */
class ChecklistItemsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ChecklistItemQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ChecklistItemQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ChecklistItemCollectionResponse
     */
    public function get(?ChecklistItemQueryOptions $options = null, ?array $queryParameters = null): ChecklistItemCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ChecklistItemCollectionResponse::class);
    }

    /**
     * Create a new ChecklistItem
     *
     * @param ChecklistItem $item The item to create
     * @return ChecklistItem
     */
    public function post(ChecklistItem $item): ChecklistItem
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ChecklistItem::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ChecklistItemItemRequestBuilder
     */
    public function byId(string $id): ChecklistItemItemRequestBuilder
    {
        return new ChecklistItemItemRequestBuilder($this->client, $this->buildPath($id));
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
