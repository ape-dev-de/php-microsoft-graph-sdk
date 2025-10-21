<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PinnedChatMessageInfo;

/**
 * Request builder for individual PinnedChatMessageInfo item
 */
class PinnedChatMessageInfoItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get PinnedChatMessageInfo item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return PinnedChatMessageInfo
     */
    public function get(?array $queryParameters = null): PinnedChatMessageInfo
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, PinnedChatMessageInfo::class);
    }

    /**
     * Update PinnedChatMessageInfo item
     *
     * @param PinnedChatMessageInfo $item The item with updated properties
     * @return PinnedChatMessageInfo
     */
    public function patch(PinnedChatMessageInfo $item): PinnedChatMessageInfo
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, PinnedChatMessageInfo::class);
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
