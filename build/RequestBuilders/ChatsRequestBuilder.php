<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Chat;
use ApeDevDe\MicrosoftGraphSdk\Models\ChatCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ChatQueryOptions;

/**
 * Request builder for Chat collection
 */
class ChatsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ChatQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ChatQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ChatCollectionResponse
     */
    public function get(?ChatQueryOptions $options = null, ?array $queryParameters = null): ChatCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ChatCollectionResponse::class);
    }

    /**
     * Create a new Chat
     *
     * @param Chat $item The item to create
     * @return Chat
     */
    public function post(Chat $item): Chat
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Chat::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ChatItemRequestBuilder
     */
    public function byId(string $id): ChatItemRequestBuilder
    {
        return new ChatItemRequestBuilder($this->client, $this->buildPath($id));
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
