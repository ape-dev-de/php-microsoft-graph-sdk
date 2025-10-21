<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Permission;

/**
 * Request builder for individual Permission item
 */
class PermissionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Permission item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Permission
     */
    public function get(?array $queryParameters = null): Permission
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Permission::class);
    }

    /**
     * Update Permission item
     *
     * @param Permission $item The item with updated properties
     * @return Permission
     */
    public function patch(Permission $item): Permission
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Permission::class);
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
