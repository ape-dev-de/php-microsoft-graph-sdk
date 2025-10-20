<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Storage;
use ApeDevDe\MicrosoftGraphSdk\Models\StorageCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\StorageQueryOptions;

/**
 * Request builder for Storage collection
 */
class StorageRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new StorageQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param StorageQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return StorageCollectionResponse
     */
    public function get(?StorageQueryOptions $options = null, ?array $queryParameters = null): StorageCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, StorageCollectionResponse::class);
    }

    /**
     * Create a new Storage
     *
     * @param Storage $item The item to create
     * @return Storage
     */
    public function post(Storage $item): Storage
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Storage::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return StorageItemRequestBuilder
     */
    public function byId(string $id): StorageItemRequestBuilder
    {
        return new StorageItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->buildPath('$count'));
        return (int) $response->getBody()->getContents();
    }

}
