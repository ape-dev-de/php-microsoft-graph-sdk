<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\RoleManagement;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\RoleManagementQueryOptions;

/**
 * Request builder for RoleManagement
 */
class RoleManagementRequestBuilder extends BaseRequestBuilder
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
     * @param RoleManagementQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return RoleManagement
     */
    public function get(?RoleManagementQueryOptions $options = null, ?array $queryParameters = null): RoleManagement
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, RoleManagement::class);
    }

    /**
     * Create a new RoleManagement
     *
     * @param RoleManagement $item The item to create
     * @return RoleManagement
     */
    public function post(RoleManagement $item): RoleManagement
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, RoleManagement::class);
    }

}
