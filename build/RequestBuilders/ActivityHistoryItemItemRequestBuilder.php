<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ActivityHistoryItem;

/**
 * Request builder for individual ActivityHistoryItem item
 */
class ActivityHistoryItemItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ActivityHistoryItem item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ActivityHistoryItem
     */
    public function get(?array $queryParameters = null): ActivityHistoryItem
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ActivityHistoryItem::class);
    }

    /**
     * Update ActivityHistoryItem item
     *
     * @param ActivityHistoryItem $item The item with updated properties
     * @return ActivityHistoryItem
     */
    public function patch(ActivityHistoryItem $item): ActivityHistoryItem
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ActivityHistoryItem::class);
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
