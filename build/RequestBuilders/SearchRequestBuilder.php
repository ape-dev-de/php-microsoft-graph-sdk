<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Search;
use ApeDevDe\MicrosoftGraphSdk\Models\SearchCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SearchQueryOptions;

/**
 * Request builder for Search collection
 */
class SearchRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SearchQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SearchQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SearchCollectionResponse
     */
    public function get(?SearchQueryOptions $options = null, ?array $queryParameters = null): SearchCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SearchCollectionResponse::class);
    }

    /**
     * Create a new Search
     *
     * @param Search $item The item to create
     * @return Search
     */
    public function post(Search $item): Search
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Search::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SearchItemRequestBuilder
     */
    public function byId(string $id): SearchItemRequestBuilder
    {
        return new SearchItemRequestBuilder($this->client, $this->buildPath($id));
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
