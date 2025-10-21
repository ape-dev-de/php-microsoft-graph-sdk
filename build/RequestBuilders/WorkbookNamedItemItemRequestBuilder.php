<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookNamedItem;

/**
 * Request builder for individual WorkbookNamedItem item
 */
class WorkbookNamedItemItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get WorkbookNamedItem item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return WorkbookNamedItem
     */
    public function get(?array $queryParameters = null): WorkbookNamedItem
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, WorkbookNamedItem::class);
    }

    /**
     * Update WorkbookNamedItem item
     *
     * @param WorkbookNamedItem $item The item with updated properties
     * @return WorkbookNamedItem
     */
    public function patch(WorkbookNamedItem $item): WorkbookNamedItem
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookNamedItem::class);
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
