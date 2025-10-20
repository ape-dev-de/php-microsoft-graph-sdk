<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TenantRelationship;

/**
 * Request builder for individual TenantRelationship item
 */
class TenantRelationshipItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get TenantRelationship item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return TenantRelationship
     */
    public function get(?array $queryParameters = null): TenantRelationship
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, TenantRelationship::class);
    }

    /**
     * Update TenantRelationship item
     *
     * @param TenantRelationship $item The item with updated properties
     * @return TenantRelationship
     */
    public function patch(TenantRelationship $item): TenantRelationship
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, TenantRelationship::class);
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
