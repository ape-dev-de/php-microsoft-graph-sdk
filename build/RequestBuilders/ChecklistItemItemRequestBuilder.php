<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ChecklistItem;

/**
 * Request builder for individual ChecklistItem item
 */
class ChecklistItemItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ChecklistItem item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ChecklistItem
     */
    public function get(?array $queryParameters = null): ChecklistItem
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ChecklistItem::class);
    }

    /**
     * Update ChecklistItem item
     *
     * @param ChecklistItem $item The item with updated properties
     * @return ChecklistItem
     */
    public function patch(ChecklistItem $item): ChecklistItem
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ChecklistItem::class);
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
