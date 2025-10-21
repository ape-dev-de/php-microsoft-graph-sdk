<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Conversation;

/**
 * Request builder for individual Conversation item
 */
class ConversationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Conversation item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Conversation
     */
    public function get(?array $queryParameters = null): Conversation
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Conversation::class);
    }

    /**
     * Update Conversation item
     *
     * @param Conversation $item The item with updated properties
     * @return Conversation
     */
    public function patch(Conversation $item): Conversation
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Conversation::class);
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
