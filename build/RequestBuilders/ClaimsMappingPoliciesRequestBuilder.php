<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ClaimsMappingPolicy;
use ApeDevDe\MicrosoftGraphSdk\Models\ClaimsMappingPolicyCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ClaimsMappingPolicyQueryOptions;

/**
 * Request builder for ClaimsMappingPolicy
 */
class ClaimsMappingPoliciesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ClaimsMappingPolicyQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ClaimsMappingPolicyQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ClaimsMappingPolicyCollectionResponse
     */
    public function get(?ClaimsMappingPolicyQueryOptions $options = null, ?array $queryParameters = null): ClaimsMappingPolicyCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ClaimsMappingPolicyCollectionResponse::class);
    }

    /**
     * Create a new ClaimsMappingPolicy
     *
     * @param ClaimsMappingPolicy $item The item to create
     * @return ClaimsMappingPolicy
     */
    public function post(ClaimsMappingPolicy $item): ClaimsMappingPolicy
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ClaimsMappingPolicy::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ServicePrincipalItemRequestBuilder
     */
    public function byId(string $id): ServicePrincipalItemRequestBuilder
    {
        return new ServicePrincipalItemRequestBuilder($this->client, $this->buildPath($id));
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
