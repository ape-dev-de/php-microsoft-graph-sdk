<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ItemActivityStat;

/**
 * Request builder for individual ItemActivityStat item
 */
class ItemActivityStatItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ItemActivityStat item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ItemActivityStat
     */
    public function get(?array $queryParameters = null): ItemActivityStat
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ItemActivityStat::class);
    }

    /**
     * Update ItemActivityStat item
     *
     * @param ItemActivityStat $item The item with updated properties
     * @return ItemActivityStat
     */
    public function patch(ItemActivityStat $item): ItemActivityStat
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ItemActivityStat::class);
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
