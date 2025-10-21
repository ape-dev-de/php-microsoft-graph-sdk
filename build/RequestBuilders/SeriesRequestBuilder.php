<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartSeries;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartSeriesCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookChartSeriesQueryOptions;

/**
 * Request builder for WorkbookChartSeries
 */
class SeriesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new WorkbookChartSeriesQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param WorkbookChartSeriesQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookChartSeriesCollectionResponse
     */
    public function get(?WorkbookChartSeriesQueryOptions $options = null, ?array $queryParameters = null): WorkbookChartSeriesCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookChartSeriesCollectionResponse::class);
    }

    /**
     * Create a new WorkbookChartSeries
     *
     * @param WorkbookChartSeries $item The item to create
     * @return WorkbookChartSeries
     */
    public function post(WorkbookChartSeries $item): WorkbookChartSeries
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChartSeries::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return WorkbookChartSeriesItemRequestBuilder
     */
    public function byId(string $id): WorkbookChartSeriesItemRequestBuilder
    {
        return new WorkbookChartSeriesItemRequestBuilder($this->client, $this->buildPath($id));
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
