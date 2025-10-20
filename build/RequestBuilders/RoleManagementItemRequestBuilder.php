<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\RoleManagement;

/**
 * Request builder for individual RoleManagement item
 */
class RoleManagementItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get RoleManagement item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return RoleManagement
     */
    public function get(?array $queryParameters = null): RoleManagement
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, RoleManagement::class);
    }

    /**
     * Update RoleManagement item
     *
     * @param RoleManagement $item The item with updated properties
     * @return RoleManagement
     */
    public function patch(RoleManagement $item): RoleManagement
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, RoleManagement::class);
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
