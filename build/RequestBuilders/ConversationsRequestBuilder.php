<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Conversation;
use ApeDevDe\MicrosoftGraphSdk\Models\ConversationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ConversationQueryOptions;

/**
 * Request builder for Conversation
 */
class ConversationsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ConversationQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ConversationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ConversationCollectionResponse
     */
    public function get(?ConversationQueryOptions $options = null, ?array $queryParameters = null): ConversationCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ConversationCollectionResponse::class);
    }

    /**
     * Create a new Conversation
     *
     * @param Conversation $item The item to create
     * @return Conversation
     */
    public function post(Conversation $item): Conversation
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Conversation::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ConversationItemRequestBuilder
     */
    public function byId(string $id): ConversationItemRequestBuilder
    {
        return new ConversationItemRequestBuilder($this->client, $this->buildPath($id));
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
