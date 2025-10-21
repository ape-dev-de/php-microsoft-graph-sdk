<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\LinkedResource;
use ApeDevDe\MicrosoftGraphSdk\Models\LinkedResourceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\LinkedResourceQueryOptions;

/**
 * Request builder for LinkedResource
 */
class LinkedResourcesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new LinkedResourceQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param LinkedResourceQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return LinkedResourceCollectionResponse
     */
    public function get(?LinkedResourceQueryOptions $options = null, ?array $queryParameters = null): LinkedResourceCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, LinkedResourceCollectionResponse::class);
    }

    /**
     * Create a new LinkedResource
     *
     * @param LinkedResource $item The item to create
     * @return LinkedResource
     */
    public function post(LinkedResource $item): LinkedResource
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, LinkedResource::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return LinkedResourceItemRequestBuilder
     */
    public function byId(string $id): LinkedResourceItemRequestBuilder
    {
        return new LinkedResourceItemRequestBuilder($this->client, $this->buildPath($id));
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
