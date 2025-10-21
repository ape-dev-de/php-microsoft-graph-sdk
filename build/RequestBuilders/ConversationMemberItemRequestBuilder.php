<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ConversationMember;

/**
 * Request builder for individual ConversationMember item
 */
class ConversationMemberItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ConversationMember item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ConversationMember
     */
    public function get(?array $queryParameters = null): ConversationMember
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ConversationMember::class);
    }

    /**
     * Update ConversationMember item
     *
     * @param ConversationMember $item The item with updated properties
     * @return ConversationMember
     */
    public function patch(ConversationMember $item): ConversationMember
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ConversationMember::class);
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
