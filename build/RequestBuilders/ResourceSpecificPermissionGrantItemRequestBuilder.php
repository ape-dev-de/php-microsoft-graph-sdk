<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ResourceSpecificPermissionGrant;

/**
 * Request builder for individual ResourceSpecificPermissionGrant item
 */
class ResourceSpecificPermissionGrantItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ResourceSpecificPermissionGrant item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ResourceSpecificPermissionGrant
     */
    public function get(?array $queryParameters = null): ResourceSpecificPermissionGrant
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ResourceSpecificPermissionGrant::class);
    }

    /**
     * Update ResourceSpecificPermissionGrant item
     *
     * @param ResourceSpecificPermissionGrant $item The item with updated properties
     * @return ResourceSpecificPermissionGrant
     */
    public function patch(ResourceSpecificPermissionGrant $item): ResourceSpecificPermissionGrant
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ResourceSpecificPermissionGrant::class);
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
