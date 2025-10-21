<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookWorksheet;

/**
 * Request builder for individual WorkbookWorksheet item
 */
class WorkbookWorksheetItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get WorkbookWorksheet item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return WorkbookWorksheet
     */
    public function get(?array $queryParameters = null): WorkbookWorksheet
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, WorkbookWorksheet::class);
    }

    /**
     * Update WorkbookWorksheet item
     *
     * @param WorkbookWorksheet $item The item with updated properties
     * @return WorkbookWorksheet
     */
    public function patch(WorkbookWorksheet $item): WorkbookWorksheet
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookWorksheet::class);
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
