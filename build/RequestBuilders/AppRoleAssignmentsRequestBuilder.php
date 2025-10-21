<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AppRoleAssignment;
use ApeDevDe\MicrosoftGraphSdk\Models\AppRoleAssignmentCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AppRoleAssignmentQueryOptions;

/**
 * Request builder for AppRoleAssignment
 */
class AppRoleAssignmentsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AppRoleAssignmentQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param AppRoleAssignmentQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AppRoleAssignmentCollectionResponse
     */
    public function get(?AppRoleAssignmentQueryOptions $options = null, ?array $queryParameters = null): AppRoleAssignmentCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AppRoleAssignmentCollectionResponse::class);
    }

    /**
     * Create a new AppRoleAssignment
     *
     * @param AppRoleAssignment $item The item to create
     * @return AppRoleAssignment
     */
    public function post(AppRoleAssignment $item): AppRoleAssignment
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AppRoleAssignment::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return AppRoleAssignmentItemRequestBuilder
     */
    public function byId(string $id): AppRoleAssignmentItemRequestBuilder
    {
        return new AppRoleAssignmentItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->getFullPath() . '/$count');
        return (int) $response->getBody()->getContents();
    }

}
