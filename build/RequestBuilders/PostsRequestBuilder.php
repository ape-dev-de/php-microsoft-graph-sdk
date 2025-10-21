<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Post;
use ApeDevDe\MicrosoftGraphSdk\Models\PostCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PostQueryOptions;

/**
 * Request builder for Post
 */
class PostsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new PostQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param PostQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PostCollectionResponse
     */
    public function get(?PostQueryOptions $options = null, ?array $queryParameters = null): PostCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PostCollectionResponse::class);
    }

    /**
     * Create a new Post
     *
     * @param Post $item The item to create
     * @return Post
     */
    public function post(Post $item): Post
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Post::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return PostItemRequestBuilder
     */
    public function byId(string $id): PostItemRequestBuilder
    {
        return new PostItemRequestBuilder($this->client, $this->buildPath($id));
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
