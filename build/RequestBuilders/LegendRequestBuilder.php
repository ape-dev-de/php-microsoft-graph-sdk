<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartLegend;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookChartLegendQueryOptions;

/**
 * Request builder for WorkbookChartLegend
 */
class LegendRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookChartLegendQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookChartLegend
     */
    public function get(?WorkbookChartLegendQueryOptions $options = null, ?array $queryParameters = null): WorkbookChartLegend
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookChartLegend::class);
    }

    /**
     * Create a new WorkbookChartLegend
     *
     * @param WorkbookChartLegend $item The item to create
     * @return WorkbookChartLegend
     */
    public function post(WorkbookChartLegend $item): WorkbookChartLegend
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChartLegend::class);
    }
    /**
     * Get format request builder
     *
     * @return FormatRequestBuilder
     */
    public function format(): FormatRequestBuilder
    {
        return new FormatRequestBuilder($this->client, $this->buildPath('format'));
    }

}
