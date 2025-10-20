<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Chat;

/**
 * Request builder for individual Chat item
 */
class ChatItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Chat item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Chat
     */
    public function get(?array $queryParameters = null): Chat
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Chat::class);
    }

    /**
     * Update Chat item
     *
     * @param Chat $item The item with updated properties
     * @return Chat
     */
    public function patch(Chat $item): Chat
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Chat::class);
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
