<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Organization;

/**
 * Request builder for individual Organization item
 */
class OrganizationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Organization item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Organization
     */
    public function get(?array $queryParameters = null): Organization
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Organization::class);
    }

    /**
     * Update Organization item
     *
     * @param Organization $item The item with updated properties
     * @return Organization
     */
    public function patch(Organization $item): Organization
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Organization::class);
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
