<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\FilterOperatorSchema;
use ApeDevDe\MicrosoftGraphSdk\Models\FilterOperatorSchemaCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\FilterOperatorSchemaQueryOptions;

/**
 * Request builder for FilterOperatorSchema
 */
class FilterOperatorsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new FilterOperatorSchemaQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param FilterOperatorSchemaQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return FilterOperatorSchemaCollectionResponse
     */
    public function get(?FilterOperatorSchemaQueryOptions $options = null, ?array $queryParameters = null): FilterOperatorSchemaCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, FilterOperatorSchemaCollectionResponse::class);
    }

    /**
     * Create a new FilterOperatorSchema
     *
     * @param FilterOperatorSchema $item The item to create
     * @return FilterOperatorSchema
     */
    public function post(FilterOperatorSchema $item): FilterOperatorSchema
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, FilterOperatorSchema::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return FilterOperatorSchemaItemRequestBuilder
     */
    public function byId(string $id): FilterOperatorSchemaItemRequestBuilder
    {
        return new FilterOperatorSchemaItemRequestBuilder($this->client, $this->buildPath($id));
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
