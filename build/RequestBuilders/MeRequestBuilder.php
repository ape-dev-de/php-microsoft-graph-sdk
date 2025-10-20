<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Me;
use ApeDevDe\MicrosoftGraphSdk\Models\MeCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\MeQueryOptions;

/**
 * Request builder for Me collection
 */
class MeRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new MeQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param MeQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return MeCollectionResponse
     */
    public function get(?MeQueryOptions $options = null, ?array $queryParameters = null): MeCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, MeCollectionResponse::class);
    }

    /**
     * Create a new Me
     *
     * @param Me $item The item to create
     * @return Me
     */
    public function post(Me $item): Me
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Me::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return MeItemRequestBuilder
     */
    public function byId(string $id): MeItemRequestBuilder
    {
        return new MeItemRequestBuilder($this->client, $this->buildPath($id));
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
