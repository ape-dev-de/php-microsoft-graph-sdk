<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ChatMessageHostedContent;

/**
 * Request builder for individual ChatMessageHostedContent item
 */
class ChatMessageHostedContentItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ChatMessageHostedContent item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ChatMessageHostedContent
     */
    public function get(?array $queryParameters = null): ChatMessageHostedContent
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ChatMessageHostedContent::class);
    }

    /**
     * Update ChatMessageHostedContent item
     *
     * @param ChatMessageHostedContent $item The item with updated properties
     * @return ChatMessageHostedContent
     */
    public function patch(ChatMessageHostedContent $item): ChatMessageHostedContent
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ChatMessageHostedContent::class);
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
