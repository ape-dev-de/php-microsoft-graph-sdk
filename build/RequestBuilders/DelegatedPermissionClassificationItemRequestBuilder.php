<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DelegatedPermissionClassification;

/**
 * Request builder for individual DelegatedPermissionClassification item
 */
class DelegatedPermissionClassificationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DelegatedPermissionClassification item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DelegatedPermissionClassification
     */
    public function get(?array $queryParameters = null): DelegatedPermissionClassification
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DelegatedPermissionClassification::class);
    }

    /**
     * Update DelegatedPermissionClassification item
     *
     * @param DelegatedPermissionClassification $item The item with updated properties
     * @return DelegatedPermissionClassification
     */
    public function patch(DelegatedPermissionClassification $item): DelegatedPermissionClassification
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DelegatedPermissionClassification::class);
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
