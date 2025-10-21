<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OnlineMeeting;
use ApeDevDe\MicrosoftGraphSdk\Models\OnlineMeetingCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OnlineMeetingQueryOptions;

/**
 * Request builder for OnlineMeeting
 */
class OnlineMeetingsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new OnlineMeetingQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param OnlineMeetingQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return OnlineMeetingCollectionResponse
     */
    public function get(?OnlineMeetingQueryOptions $options = null, ?array $queryParameters = null): OnlineMeetingCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, OnlineMeetingCollectionResponse::class);
    }

    /**
     * Create a new OnlineMeeting
     *
     * @param OnlineMeeting $item The item to create
     * @return OnlineMeeting
     */
    public function post(OnlineMeeting $item): OnlineMeeting
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, OnlineMeeting::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return OnlineMeetingItemRequestBuilder
     */
    public function byId(string $id): OnlineMeetingItemRequestBuilder
    {
        return new OnlineMeetingItemRequestBuilder($this->client, $this->buildPath($id));
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
    /**
     * Get createOrGet request builder
     *
     * @return CreateOrGetRequestBuilder
     */
    public function createOrGet(): CreateOrGetRequestBuilder
    {
        return new CreateOrGetRequestBuilder($this->client, $this->buildPath('createOrGet'));
    }

}
