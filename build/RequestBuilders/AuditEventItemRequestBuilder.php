<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AuditEvent;

/**
 * Request builder for individual AuditEvent item
 */
class AuditEventItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AuditEvent item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AuditEvent
     */
    public function get(?array $queryParameters = null): AuditEvent
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AuditEvent::class);
    }

    /**
     * Update AuditEvent item
     *
     * @param AuditEvent $item The item with updated properties
     * @return AuditEvent
     */
    public function patch(AuditEvent $item): AuditEvent
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AuditEvent::class);
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
