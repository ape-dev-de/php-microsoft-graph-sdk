<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AuditLog;

/**
 * Request builder for individual AuditLog item
 */
class AuditLogItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AuditLog item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AuditLog
     */
    public function get(?array $queryParameters = null): AuditLog
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AuditLog::class);
    }

    /**
     * Update AuditLog item
     *
     * @param AuditLog $item The item with updated properties
     * @return AuditLog
     */
    public function patch(AuditLog $item): AuditLog
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AuditLog::class);
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
