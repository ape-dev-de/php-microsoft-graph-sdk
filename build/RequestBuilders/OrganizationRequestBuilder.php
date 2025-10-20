<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Organization;
use ApeDevDe\MicrosoftGraphSdk\Models\OrganizationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OrganizationQueryOptions;

/**
 * Request builder for Organization collection
 */
class OrganizationRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new OrganizationQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param OrganizationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return OrganizationCollectionResponse
     */
    public function get(?OrganizationQueryOptions $options = null, ?array $queryParameters = null): OrganizationCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, OrganizationCollectionResponse::class);
    }

    /**
     * Create a new Organization
     *
     * @param Organization $item The item to create
     * @return Organization
     */
    public function post(Organization $item): Organization
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Organization::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return OrganizationItemRequestBuilder
     */
    public function byId(string $id): OrganizationItemRequestBuilder
    {
        return new OrganizationItemRequestBuilder($this->client, $this->buildPath($id));
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
