<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenoteResource;
use ApeDevDe\MicrosoftGraphSdk\Models\OnenoteResourceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OnenoteResourceQueryOptions;

/**
 * Request builder for OnenoteResource
 */
class ResourcesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new OnenoteResourceQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param OnenoteResourceQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return OnenoteResourceCollectionResponse
     */
    public function get(?OnenoteResourceQueryOptions $options = null, ?array $queryParameters = null): OnenoteResourceCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, OnenoteResourceCollectionResponse::class);
    }

    /**
     * Create a new OnenoteResource
     *
     * @param OnenoteResource $item The item to create
     * @return OnenoteResource
     */
    public function post(OnenoteResource $item): OnenoteResource
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, OnenoteResource::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return OnenoteResourceItemRequestBuilder
     */
    public function byId(string $id): OnenoteResourceItemRequestBuilder
    {
        return new OnenoteResourceItemRequestBuilder($this->client, $this->buildPath($id));
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
