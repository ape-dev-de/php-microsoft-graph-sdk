<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Admin;
use ApeDevDe\MicrosoftGraphSdk\Models\AdminCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AdminQueryOptions;

/**
 * Request builder for Admin collection
 */
class AdminRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AdminQueryOptions())->top(10)->select(['displayName', 'mail']))
     * 2. Array parameters: get(queryParameters: ['$top' => 10, '$select' => 'displayName,mail'])
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
     * @return AdminCollectionResponse
     */
    public function get(?AdminQueryOptions $options = null, ?array $queryParameters = null): AdminCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AdminCollectionResponse::class);
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

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return AdminItemRequestBuilder
     */
    public function byId(string $id): AdminItemRequestBuilder
    {
        return new AdminItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->buildPath('$count'));
        return (int) $response->getBody()->getContents();
    }

}
