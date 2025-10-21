<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OnlineMeeting;

/**
 * Request builder for individual OnlineMeeting item
 */
class OnlineMeetingItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get OnlineMeeting item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return OnlineMeeting
     */
    public function get(?array $queryParameters = null): OnlineMeeting
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, OnlineMeeting::class);
    }

    /**
     * Update OnlineMeeting item
     *
     * @param OnlineMeeting $item The item with updated properties
     * @return OnlineMeeting
     */
    public function patch(OnlineMeeting $item): OnlineMeeting
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, OnlineMeeting::class);
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
