<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TenantRelationship;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TenantRelationshipQueryOptions;

/**
 * Request builder for TenantRelationship
 */
class TenantRelationshipsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $filter: Filter results
     * - $orderby: Order results
     * - $top: Limit number of results
     * - $skip: Skip number of results
     * - $expand: Expand related resources
     * - $search: Search query
     * - $count: Include count of items
     *
     * @param TenantRelationshipQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TenantRelationship
     */
    public function get(?TenantRelationshipQueryOptions $options = null, ?array $queryParameters = null): TenantRelationship
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TenantRelationship::class);
    }

    /**
     * Create a new TenantRelationship
     *
     * @param TenantRelationship $item The item to create
     * @return TenantRelationship
     */
    public function post(TenantRelationship $item): TenantRelationship
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, TenantRelationship::class);
    }

}
