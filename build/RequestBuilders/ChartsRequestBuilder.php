<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChart;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookChartQueryOptions;

/**
 * Request builder for WorkbookChart
 */
class ChartsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new WorkbookChartQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param WorkbookChartQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookChartCollectionResponse
     */
    public function get(?WorkbookChartQueryOptions $options = null, ?array $queryParameters = null): WorkbookChartCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookChartCollectionResponse::class);
    }

    /**
     * Create a new WorkbookChart
     *
     * @param WorkbookChart $item The item to create
     * @return WorkbookChart
     */
    public function post(WorkbookChart $item): WorkbookChart
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChart::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return WorkbookChartItemRequestBuilder
     */
    public function byId(string $id): WorkbookChartItemRequestBuilder
    {
        return new WorkbookChartItemRequestBuilder($this->client, $this->buildPath($id));
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
    /**
     * Get add request builder
     *
     * @return AddRequestBuilder
     */
    public function add(): AddRequestBuilder
    {
        return new AddRequestBuilder($this->client, $this->buildPath('add'));
    }

}
