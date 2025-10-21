<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ConversationThread;
use ApeDevDe\MicrosoftGraphSdk\Models\ConversationThreadCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ConversationThreadQueryOptions;

/**
 * Request builder for ConversationThread
 */
class ThreadsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ConversationThreadQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ConversationThreadQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ConversationThreadCollectionResponse
     */
    public function get(?ConversationThreadQueryOptions $options = null, ?array $queryParameters = null): ConversationThreadCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ConversationThreadCollectionResponse::class);
    }

    /**
     * Create a new ConversationThread
     *
     * @param ConversationThread $item The item to create
     * @return ConversationThread
     */
    public function post(ConversationThread $item): ConversationThread
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ConversationThread::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ConversationThreadItemRequestBuilder
     */
    public function byId(string $id): ConversationThreadItemRequestBuilder
    {
        return new ConversationThreadItemRequestBuilder($this->client, $this->buildPath($id));
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
