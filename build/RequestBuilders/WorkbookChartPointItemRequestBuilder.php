<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartPoint;

/**
 * Request builder for individual WorkbookChartPoint item
 */
class WorkbookChartPointItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get WorkbookChartPoint item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return WorkbookChartPoint
     */
    public function get(?array $queryParameters = null): WorkbookChartPoint
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, WorkbookChartPoint::class);
    }

    /**
     * Update WorkbookChartPoint item
     *
     * @param WorkbookChartPoint $item The item with updated properties
     * @return WorkbookChartPoint
     */
    public function patch(WorkbookChartPoint $item): WorkbookChartPoint
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChartPoint::class);
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
