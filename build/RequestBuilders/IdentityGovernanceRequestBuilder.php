<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernance;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\IdentityGovernanceQueryOptions;

/**
 * Request builder for IdentityGovernance collection
 */
class IdentityGovernanceRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new IdentityGovernanceQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param IdentityGovernanceQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return IdentityGovernanceCollectionResponse
     */
    public function get(?IdentityGovernanceQueryOptions $options = null, ?array $queryParameters = null): IdentityGovernanceCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, IdentityGovernanceCollectionResponse::class);
    }

    /**
     * Create a new IdentityGovernance
     *
     * @param IdentityGovernance $item The item to create
     * @return IdentityGovernance
     */
    public function post(IdentityGovernance $item): IdentityGovernance
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, IdentityGovernance::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return IdentityGovernanceItemRequestBuilder
     */
    public function byId(string $id): IdentityGovernanceItemRequestBuilder
    {
        return new IdentityGovernanceItemRequestBuilder($this->client, $this->buildPath($id));
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
