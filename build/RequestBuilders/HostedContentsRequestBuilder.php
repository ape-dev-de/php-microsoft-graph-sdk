<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ChatMessageHostedContent;
use ApeDevDe\MicrosoftGraphSdk\Models\ChatMessageHostedContentCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ChatMessageHostedContentQueryOptions;

/**
 * Request builder for ChatMessageHostedContent
 */
class HostedContentsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ChatMessageHostedContentQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ChatMessageHostedContentQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ChatMessageHostedContentCollectionResponse
     */
    public function get(?ChatMessageHostedContentQueryOptions $options = null, ?array $queryParameters = null): ChatMessageHostedContentCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ChatMessageHostedContentCollectionResponse::class);
    }

    /**
     * Create a new ChatMessageHostedContent
     *
     * @param ChatMessageHostedContent $item The item to create
     * @return ChatMessageHostedContent
     */
    public function post(ChatMessageHostedContent $item): ChatMessageHostedContent
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ChatMessageHostedContent::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ChatMessageHostedContentItemRequestBuilder
     */
    public function byId(string $id): ChatMessageHostedContentItemRequestBuilder
    {
        return new ChatMessageHostedContentItemRequestBuilder($this->client, $this->buildPath($id));
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
