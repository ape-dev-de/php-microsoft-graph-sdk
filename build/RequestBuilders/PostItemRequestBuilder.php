<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Post;

/**
 * Request builder for individual Post item
 */
class PostItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Post item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Post
     */
    public function get(?array $queryParameters = null): Post
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Post::class);
    }

    /**
     * Update Post item
     *
     * @param Post $item The item with updated properties
     * @return Post
     */
    public function patch(Post $item): Post
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Post::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

}
