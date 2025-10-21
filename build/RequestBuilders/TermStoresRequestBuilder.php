<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreStore;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreStoreCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TermStoreStoreQueryOptions;

/**
 * Request builder for TermStoreStore
 */
class TermStoresRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TermStoreStoreQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param TermStoreStoreQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TermStoreStoreCollectionResponse
     */
    public function get(?TermStoreStoreQueryOptions $options = null, ?array $queryParameters = null): TermStoreStoreCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TermStoreStoreCollectionResponse::class);
    }

    /**
     * Create a new TermStoreStore
     *
     * @param TermStoreStore $item The item to create
     * @return TermStoreStore
     */
    public function post(TermStoreStore $item): TermStoreStore
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, TermStoreStore::class);
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
