<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Event;

/**
 * Request builder for individual Event item
 */
class EventItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Event item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Event
     */
    public function get(?array $queryParameters = null): Event
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Event::class);
    }

    /**
     * Update Event item
     *
     * @param Event $item The item with updated properties
     * @return Event
     */
    public function patch(Event $item): Event
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Event::class);
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
