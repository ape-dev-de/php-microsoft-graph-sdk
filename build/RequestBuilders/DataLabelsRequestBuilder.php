<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartDataLabels;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookChartDataLabelsQueryOptions;

/**
 * Request builder for WorkbookChartDataLabels
 */
class DataLabelsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookChartDataLabelsQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookChartDataLabels
     */
    public function get(?WorkbookChartDataLabelsQueryOptions $options = null, ?array $queryParameters = null): WorkbookChartDataLabels
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookChartDataLabels::class);
    }

    /**
     * Create a new WorkbookChartDataLabels
     *
     * @param WorkbookChartDataLabels $item The item to create
     * @return WorkbookChartDataLabels
     */
    public function post(WorkbookChartDataLabels $item): WorkbookChartDataLabels
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChartDataLabels::class);
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
