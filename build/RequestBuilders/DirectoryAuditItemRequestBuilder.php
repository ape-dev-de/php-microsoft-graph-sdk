<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryAudit;

/**
 * Request builder for individual DirectoryAudit item
 */
class DirectoryAuditItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DirectoryAudit item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DirectoryAudit
     */
    public function get(?array $queryParameters = null): DirectoryAudit
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DirectoryAudit::class);
    }

    /**
     * Update DirectoryAudit item
     *
     * @param DirectoryAudit $item The item with updated properties
     * @return DirectoryAudit
     */
    public function patch(DirectoryAudit $item): DirectoryAudit
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DirectoryAudit::class);
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
