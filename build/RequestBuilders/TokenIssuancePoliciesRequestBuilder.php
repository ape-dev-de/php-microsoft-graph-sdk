<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TokenIssuancePolicy;
use ApeDevDe\MicrosoftGraphSdk\Models\TokenIssuancePolicyCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TokenIssuancePolicyQueryOptions;

/**
 * Request builder for TokenIssuancePolicy
 */
class TokenIssuancePoliciesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TokenIssuancePolicyQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param TokenIssuancePolicyQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TokenIssuancePolicyCollectionResponse
     */
    public function get(?TokenIssuancePolicyQueryOptions $options = null, ?array $queryParameters = null): TokenIssuancePolicyCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TokenIssuancePolicyCollectionResponse::class);
    }

    /**
     * Create a new TokenIssuancePolicy
     *
     * @param TokenIssuancePolicy $item The item to create
     * @return TokenIssuancePolicy
     */
    public function post(TokenIssuancePolicy $item): TokenIssuancePolicy
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, TokenIssuancePolicy::class);
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
