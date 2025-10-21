<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ColumnLink;

/**
 * Request builder for individual ColumnLink item
 */
class ColumnLinkItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ColumnLink item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ColumnLink
     */
    public function get(?array $queryParameters = null): ColumnLink
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ColumnLink::class);
    }

    /**
     * Update ColumnLink item
     *
     * @param ColumnLink $item The item with updated properties
     * @return ColumnLink
     */
    public function patch(ColumnLink $item): ColumnLink
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ColumnLink::class);
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
