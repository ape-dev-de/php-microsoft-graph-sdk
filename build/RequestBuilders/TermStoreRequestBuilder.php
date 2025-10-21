<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreStore;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TermStoreStoreQueryOptions;

/**
 * Request builder for TermStoreStore
 */
class TermStoreRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
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
     * @return TermStoreStore
     */
    public function get(?TermStoreStoreQueryOptions $options = null, ?array $queryParameters = null): TermStoreStore
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TermStoreStore::class);
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
     * Get groups request builder
     *
     * @return GroupsRequestBuilder
     */
    public function groups(): GroupsRequestBuilder
    {
        return new GroupsRequestBuilder($this->client, $this->buildPath('groups'));
    }

    /**
     * Get sets request builder
     *
     * @return SetsRequestBuilder
     */
    public function sets(): SetsRequestBuilder
    {
        return new SetsRequestBuilder($this->client, $this->buildPath('sets'));
    }

}
