<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Admin;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AdminQueryOptions;

/**
 * Request builder for Admin
 */
class AdminRequestBuilder extends BaseRequestBuilder
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
     * @param AdminQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Admin
     */
    public function get(?AdminQueryOptions $options = null, ?array $queryParameters = null): Admin
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Admin::class);
    }

    /**
     * Create a new Admin
     *
     * @param Admin $item The item to create
     * @return Admin
     */
    public function post(Admin $item): Admin
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Admin::class);
    }

}
