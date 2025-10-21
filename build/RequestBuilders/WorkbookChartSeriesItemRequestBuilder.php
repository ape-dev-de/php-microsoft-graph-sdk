<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartSeries;

/**
 * Request builder for individual WorkbookChartSeries item
 */
class WorkbookChartSeriesItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get WorkbookChartSeries item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return WorkbookChartSeries
     */
    public function get(?array $queryParameters = null): WorkbookChartSeries
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, WorkbookChartSeries::class);
    }

    /**
     * Update WorkbookChartSeries item
     *
     * @param WorkbookChartSeries $item The item with updated properties
     * @return WorkbookChartSeries
     */
    public function patch(WorkbookChartSeries $item): WorkbookChartSeries
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChartSeries::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

}
