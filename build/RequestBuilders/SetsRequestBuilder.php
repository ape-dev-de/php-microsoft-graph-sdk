<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreSet;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreSetCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TermStoreSetQueryOptions;

/**
 * Request builder for TermStoreSet
 */
class SetsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TermStoreSetQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param TermStoreSetQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TermStoreSetCollectionResponse
     */
    public function get(?TermStoreSetQueryOptions $options = null, ?array $queryParameters = null): TermStoreSetCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TermStoreSetCollectionResponse::class);
    }

    /**
     * Create a new TermStoreSet
     *
     * @param TermStoreSet $item The item to create
     * @return TermStoreSet
     */
    public function post(TermStoreSet $item): TermStoreSet
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, TermStoreSet::class);
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
