<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ChatMessage;
use ApeDevDe\MicrosoftGraphSdk\Models\ChatMessageCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ChatMessageQueryOptions;

/**
 * Request builder for ChatMessage
 */
class MessagesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ChatMessageQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ChatMessageQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ChatMessageCollectionResponse
     */
    public function get(?ChatMessageQueryOptions $options = null, ?array $queryParameters = null): ChatMessageCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ChatMessageCollectionResponse::class);
    }

    /**
     * Create a new ChatMessage
     *
     * @param ChatMessage $item The item to create
     * @return ChatMessage
     */
    public function post(ChatMessage $item): ChatMessage
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ChatMessage::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ChatMessageItemRequestBuilder
     */
    public function byId(string $id): ChatMessageItemRequestBuilder
    {
        return new ChatMessageItemRequestBuilder($this->client, $this->buildPath($id));
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
