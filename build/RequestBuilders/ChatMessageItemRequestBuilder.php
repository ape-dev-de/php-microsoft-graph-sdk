<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ChatMessage;

/**
 * Request builder for individual ChatMessage item
 */
class ChatMessageItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ChatMessage item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ChatMessage
     */
    public function get(?array $queryParameters = null): ChatMessage
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ChatMessage::class);
    }

    /**
     * Update ChatMessage item
     *
     * @param ChatMessage $item The item with updated properties
     * @return ChatMessage
     */
    public function patch(ChatMessage $item): ChatMessage
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ChatMessage::class);
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
