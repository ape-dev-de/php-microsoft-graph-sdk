<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartPoint;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartPointCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookChartPointQueryOptions;

/**
 * Request builder for WorkbookChartPoint
 */
class PointsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new WorkbookChartPointQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param WorkbookChartPointQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookChartPointCollectionResponse
     */
    public function get(?WorkbookChartPointQueryOptions $options = null, ?array $queryParameters = null): WorkbookChartPointCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookChartPointCollectionResponse::class);
    }

    /**
     * Create a new WorkbookChartPoint
     *
     * @param WorkbookChartPoint $item The item to create
     * @return WorkbookChartPoint
     */
    public function post(WorkbookChartPoint $item): WorkbookChartPoint
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChartPoint::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return WorkbookChartPointItemRequestBuilder
     */
    public function byId(string $id): WorkbookChartPointItemRequestBuilder
    {
        return new WorkbookChartPointItemRequestBuilder($this->client, $this->buildPath($id));
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
