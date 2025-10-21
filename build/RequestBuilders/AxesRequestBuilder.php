<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartAxes;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookChartAxesQueryOptions;

/**
 * Request builder for WorkbookChartAxes
 */
class AxesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookChartAxesQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookChartAxes
     */
    public function get(?WorkbookChartAxesQueryOptions $options = null, ?array $queryParameters = null): WorkbookChartAxes
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookChartAxes::class);
    }

    /**
     * Create a new WorkbookChartAxes
     *
     * @param WorkbookChartAxes $item The item to create
     * @return WorkbookChartAxes
     */
    public function post(WorkbookChartAxes $item): WorkbookChartAxes
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChartAxes::class);
    }
    /**
     * Get categoryAxis request builder
     *
     * @return CategoryAxisRequestBuilder
     */
    public function categoryAxis(): CategoryAxisRequestBuilder
    {
        return new CategoryAxisRequestBuilder($this->client, $this->buildPath('categoryAxis'));
    }

    /**
     * Get seriesAxis request builder
     *
     * @return SeriesAxisRequestBuilder
     */
    public function seriesAxis(): SeriesAxisRequestBuilder
    {
        return new SeriesAxisRequestBuilder($this->client, $this->buildPath('seriesAxis'));
    }

    /**
     * Get valueAxis request builder
     *
     * @return ValueAxisRequestBuilder
     */
    public function valueAxis(): ValueAxisRequestBuilder
    {
        return new ValueAxisRequestBuilder($this->client, $this->buildPath('valueAxis'));
    }

}
