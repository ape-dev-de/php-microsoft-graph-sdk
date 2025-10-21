<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ChatMessageInfo;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ChatMessageInfoQueryOptions;

/**
 * Request builder for ChatMessageInfo
 */
class LastMessagePreviewRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param ChatMessageInfoQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ChatMessageInfo
     */
    public function get(?ChatMessageInfoQueryOptions $options = null, ?array $queryParameters = null): ChatMessageInfo
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ChatMessageInfo::class);
    }

}
