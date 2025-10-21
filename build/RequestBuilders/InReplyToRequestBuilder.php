<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Post;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PostQueryOptions;

/**
 * Request builder for Post
 */
class InReplyToRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
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
     * @return Post
     */
    public function get(?PostQueryOptions $options = null, ?array $queryParameters = null): Post
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Post::class);
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
     * Get attachments request builder
     *
     * @return AttachmentsRequestBuilder
     */
    public function attachments(): AttachmentsRequestBuilder
    {
        return new AttachmentsRequestBuilder($this->client, $this->buildPath('attachments'));
    }

    /**
     * Get extensions request builder
     *
     * @return ExtensionsRequestBuilder
     */
    public function extensions(): ExtensionsRequestBuilder
    {
        return new ExtensionsRequestBuilder($this->client, $this->buildPath('extensions'));
    }

    /**
     * Get forward request builder
     *
     * @return ForwardRequestBuilder
     */
    public function forward(): ForwardRequestBuilder
    {
        return new ForwardRequestBuilder($this->client, $this->buildPath('forward'));
    }

    /**
     * Get reply request builder
     *
     * @return ReplyRequestBuilder
     */
    public function reply(): ReplyRequestBuilder
    {
        return new ReplyRequestBuilder($this->client, $this->buildPath('reply'));
    }

}
