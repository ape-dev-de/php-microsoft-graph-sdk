<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AppRoleAssignment;

/**
 * Request builder for individual AppRoleAssignment item
 */
class AppRoleAssignmentItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AppRoleAssignment item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AppRoleAssignment
     */
    public function get(?array $queryParameters = null): AppRoleAssignment
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AppRoleAssignment::class);
    }

    /**
     * Update AppRoleAssignment item
     *
     * @param AppRoleAssignment $item The item with updated properties
     * @return AppRoleAssignment
     */
    public function patch(AppRoleAssignment $item): AppRoleAssignment
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AppRoleAssignment::class);
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
