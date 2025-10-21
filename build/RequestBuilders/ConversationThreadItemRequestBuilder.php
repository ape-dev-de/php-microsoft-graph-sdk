<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ConversationThread;

/**
 * Request builder for individual ConversationThread item
 */
class ConversationThreadItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ConversationThread item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ConversationThread
     */
    public function get(?array $queryParameters = null): ConversationThread
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ConversationThread::class);
    }

    /**
     * Update ConversationThread item
     *
     * @param ConversationThread $item The item with updated properties
     * @return ConversationThread
     */
    public function patch(ConversationThread $item): ConversationThread
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ConversationThread::class);
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
