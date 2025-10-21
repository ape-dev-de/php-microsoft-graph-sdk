<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SearchEntity;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SearchEntityQueryOptions;

/**
 * Request builder for SearchEntity
 */
class SearchRequestBuilder extends BaseRequestBuilder
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
     * @param SearchEntityQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SearchEntity
     */
    public function get(?SearchEntityQueryOptions $options = null, ?array $queryParameters = null): SearchEntity
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SearchEntity::class);
    }

    /**
     * Create a new SearchEntity
     *
     * @param SearchEntity $item The item to create
     * @return SearchEntity
     */
    public function post(SearchEntity $item): SearchEntity
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, SearchEntity::class);
    }

}
