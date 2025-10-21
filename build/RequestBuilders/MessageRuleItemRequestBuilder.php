<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\MessageRule;

/**
 * Request builder for individual MessageRule item
 */
class MessageRuleItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get MessageRule item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return MessageRule
     */
    public function get(?array $queryParameters = null): MessageRule
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, MessageRule::class);
    }

    /**
     * Update MessageRule item
     *
     * @param MessageRule $item The item with updated properties
     * @return MessageRule
     */
    public function patch(MessageRule $item): MessageRule
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, MessageRule::class);
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
