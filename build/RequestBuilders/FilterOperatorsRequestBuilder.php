<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\FilterOperator;
use ApeDevDe\MicrosoftGraphSdk\Models\FilterOperatorCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\FilterOperatorQueryOptions;

/**
 * Request builder for FilterOperator collection
 */
class FilterOperatorsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new FilterOperatorQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param FilterOperatorQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return FilterOperatorCollectionResponse
     */
    public function get(?FilterOperatorQueryOptions $options = null, ?array $queryParameters = null): FilterOperatorCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, FilterOperatorCollectionResponse::class);
    }

    /**
     * Create a new FilterOperator
     *
     * @param FilterOperator $item The item to create
     * @return FilterOperator
     */
    public function post(FilterOperator $item): FilterOperator
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, FilterOperator::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return FilterOperatorItemRequestBuilder
     */
    public function byId(string $id): FilterOperatorItemRequestBuilder
    {
        return new FilterOperatorItemRequestBuilder($this->client, $this->buildPath($id));
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
