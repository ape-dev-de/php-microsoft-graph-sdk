<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AttachmentSession;

/**
 * Request builder for individual AttachmentSession item
 */
class AttachmentSessionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AttachmentSession item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AttachmentSession
     */
    public function get(?array $queryParameters = null): AttachmentSession
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AttachmentSession::class);
    }

    /**
     * Update AttachmentSession item
     *
     * @param AttachmentSession $item The item with updated properties
     * @return AttachmentSession
     */
    public function patch(AttachmentSession $item): AttachmentSession
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AttachmentSession::class);
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
