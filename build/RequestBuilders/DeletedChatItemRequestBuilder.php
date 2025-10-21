<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeletedChat;

/**
 * Request builder for individual DeletedChat item
 */
class DeletedChatItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DeletedChat item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DeletedChat
     */
    public function get(?array $queryParameters = null): DeletedChat
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DeletedChat::class);
    }

    /**
     * Update DeletedChat item
     *
     * @param DeletedChat $item The item with updated properties
     * @return DeletedChat
     */
    public function patch(DeletedChat $item): DeletedChat
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DeletedChat::class);
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
