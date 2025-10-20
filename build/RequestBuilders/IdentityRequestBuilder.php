<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Identity;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\IdentityQueryOptions;

/**
 * Request builder for Identity collection
 */
class IdentityRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new IdentityQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param IdentityQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return IdentityCollectionResponse
     */
    public function get(?IdentityQueryOptions $options = null, ?array $queryParameters = null): IdentityCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, IdentityCollectionResponse::class);
    }

    /**
     * Create a new Identity
     *
     * @param Identity $item The item to create
     * @return Identity
     */
    public function post(Identity $item): Identity
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Identity::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return IdentityItemRequestBuilder
     */
    public function byId(string $id): IdentityItemRequestBuilder
    {
        return new IdentityItemRequestBuilder($this->client, $this->buildPath($id));
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
