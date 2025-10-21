<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookTable;

/**
 * Request builder for individual WorkbookTable item
 */
class WorkbookTableItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get WorkbookTable item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return WorkbookTable
     */
    public function get(?array $queryParameters = null): WorkbookTable
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, WorkbookTable::class);
    }

    /**
     * Update WorkbookTable item
     *
     * @param WorkbookTable $item The item with updated properties
     * @return WorkbookTable
     */
    public function patch(WorkbookTable $item): WorkbookTable
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookTable::class);
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
