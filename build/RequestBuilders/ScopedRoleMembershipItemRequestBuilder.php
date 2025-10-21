<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ScopedRoleMembership;

/**
 * Request builder for individual ScopedRoleMembership item
 */
class ScopedRoleMembershipItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ScopedRoleMembership item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ScopedRoleMembership
     */
    public function get(?array $queryParameters = null): ScopedRoleMembership
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ScopedRoleMembership::class);
    }

    /**
     * Update ScopedRoleMembership item
     *
     * @param ScopedRoleMembership $item The item with updated properties
     * @return ScopedRoleMembership
     */
    public function patch(ScopedRoleMembership $item): ScopedRoleMembership
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ScopedRoleMembership::class);
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
