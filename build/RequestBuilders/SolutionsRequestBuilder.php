<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Solution;
use ApeDevDe\MicrosoftGraphSdk\Models\SolutionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SolutionQueryOptions;

/**
 * Request builder for Solution collection
 */
class SolutionsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SolutionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SolutionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SolutionCollectionResponse
     */
    public function get(?SolutionQueryOptions $options = null, ?array $queryParameters = null): SolutionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SolutionCollectionResponse::class);
    }

    /**
     * Create a new Solution
     *
     * @param Solution $item The item to create
     * @return Solution
     */
    public function post(Solution $item): Solution
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Solution::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SolutionItemRequestBuilder
     */
    public function byId(string $id): SolutionItemRequestBuilder
    {
        return new SolutionItemRequestBuilder($this->client, $this->buildPath($id));
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
