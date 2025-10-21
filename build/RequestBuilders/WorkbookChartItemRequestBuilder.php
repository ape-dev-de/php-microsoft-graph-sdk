<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChart;

/**
 * Request builder for individual WorkbookChart item
 */
class WorkbookChartItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get WorkbookChart item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return WorkbookChart
     */
    public function get(?array $queryParameters = null): WorkbookChart
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, WorkbookChart::class);
    }

    /**
     * Update WorkbookChart item
     *
     * @param WorkbookChart $item The item with updated properties
     * @return WorkbookChart
     */
    public function patch(WorkbookChart $item): WorkbookChart
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChart::class);
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
