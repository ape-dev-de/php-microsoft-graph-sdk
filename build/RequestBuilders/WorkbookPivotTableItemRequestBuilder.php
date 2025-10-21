<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookPivotTable;

/**
 * Request builder for individual WorkbookPivotTable item
 */
class WorkbookPivotTableItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get WorkbookPivotTable item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return WorkbookPivotTable
     */
    public function get(?array $queryParameters = null): WorkbookPivotTable
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, WorkbookPivotTable::class);
    }

    /**
     * Update WorkbookPivotTable item
     *
     * @param WorkbookPivotTable $item The item with updated properties
     * @return WorkbookPivotTable
     */
    public function patch(WorkbookPivotTable $item): WorkbookPivotTable
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookPivotTable::class);
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
