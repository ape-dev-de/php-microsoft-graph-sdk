<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Function;
use ApeDevDe\MicrosoftGraphSdk\Models\FunctionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\FunctionQueryOptions;

/**
 * Request builder for Function collection
 */
class FunctionsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new FunctionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param FunctionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return FunctionCollectionResponse
     */
    public function get(?FunctionQueryOptions $options = null, ?array $queryParameters = null): FunctionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, FunctionCollectionResponse::class);
    }

    /**
     * Create a new Function
     *
     * @param Function $item The item to create
     * @return Function
     */
    public function post(Function $item): Function
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Function::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return FunctionItemRequestBuilder
     */
    public function byId(string $id): FunctionItemRequestBuilder
    {
        return new FunctionItemRequestBuilder($this->client, $this->buildPath($id));
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
