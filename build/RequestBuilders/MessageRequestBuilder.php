<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ChatMessage;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ChatMessageQueryOptions;

/**
 * Request builder for ChatMessage
 */
class MessageRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param ChatMessageQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ChatMessage
     */
    public function get(?ChatMessageQueryOptions $options = null, ?array $queryParameters = null): ChatMessage
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ChatMessage::class);
    }

}
