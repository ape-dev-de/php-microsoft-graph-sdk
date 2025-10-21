<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AppManagementPolicy;
use ApeDevDe\MicrosoftGraphSdk\Models\AppManagementPolicyCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AppManagementPolicyQueryOptions;

/**
 * Request builder for AppManagementPolicy
 */
class AppManagementPoliciesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new AppManagementPolicyQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param AppManagementPolicyQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AppManagementPolicyCollectionResponse
     */
    public function get(?AppManagementPolicyQueryOptions $options = null, ?array $queryParameters = null): AppManagementPolicyCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AppManagementPolicyCollectionResponse::class);
    }

    /**
     * Create a new AppManagementPolicy
     *
     * @param AppManagementPolicy $item The item to create
     * @return AppManagementPolicy
     */
    public function post(AppManagementPolicy $item): AppManagementPolicy
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AppManagementPolicy::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ApplicationItemRequestBuilder
     */
    public function byId(string $id): ApplicationItemRequestBuilder
    {
        return new ApplicationItemRequestBuilder($this->client, $this->buildPath($id));
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
