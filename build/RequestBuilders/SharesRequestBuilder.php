<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SharedDriveItem;
use ApeDevDe\MicrosoftGraphSdk\Models\SharedDriveItemCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SharedDriveItemQueryOptions;

/**
 * Request builder for SharedDriveItem
 */
class SharesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SharedDriveItemQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SharedDriveItemQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SharedDriveItemCollectionResponse
     */
    public function get(?SharedDriveItemQueryOptions $options = null, ?array $queryParameters = null): SharedDriveItemCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SharedDriveItemCollectionResponse::class);
    }

    /**
     * Create a new SharedDriveItem
     *
     * @param SharedDriveItem $item The item to create
     * @return SharedDriveItem
     */
    public function post(SharedDriveItem $item): SharedDriveItem
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, SharedDriveItem::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SharedDriveItemItemRequestBuilder
     */
    public function byId(string $id): SharedDriveItemItemRequestBuilder
    {
        return new SharedDriveItemItemRequestBuilder($this->client, $this->buildPath($id));
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
