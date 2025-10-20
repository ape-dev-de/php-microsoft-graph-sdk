<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PermissionGrant;

/**
 * Request builder for individual PermissionGrant item
 */
class PermissionGrantItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get PermissionGrant item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return PermissionGrant
     */
    public function get(?array $queryParameters = null): PermissionGrant
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, PermissionGrant::class);
    }

    /**
     * Update PermissionGrant item
     *
     * @param PermissionGrant $item The item with updated properties
     * @return PermissionGrant
     */
    public function patch(PermissionGrant $item): PermissionGrant
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, PermissionGrant::class);
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
