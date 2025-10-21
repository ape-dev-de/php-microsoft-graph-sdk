<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ThumbnailSet;
use ApeDevDe\MicrosoftGraphSdk\Models\ThumbnailSetCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ThumbnailSetQueryOptions;

/**
 * Request builder for ThumbnailSet
 */
class ThumbnailsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ThumbnailSetQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ThumbnailSetQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ThumbnailSetCollectionResponse
     */
    public function get(?ThumbnailSetQueryOptions $options = null, ?array $queryParameters = null): ThumbnailSetCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ThumbnailSetCollectionResponse::class);
    }

    /**
     * Create a new ThumbnailSet
     *
     * @param ThumbnailSet $item The item to create
     * @return ThumbnailSet
     */
    public function post(ThumbnailSet $item): ThumbnailSet
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ThumbnailSet::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ThumbnailSetItemRequestBuilder
     */
    public function byId(string $id): ThumbnailSetItemRequestBuilder
    {
        return new ThumbnailSetItemRequestBuilder($this->client, $this->buildPath($id));
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
