<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\PinnedChatMessageInfo;
use ApeDevDe\MicrosoftGraphSdk\Models\PinnedChatMessageInfoCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\PinnedChatMessageInfoQueryOptions;

/**
 * Request builder for PinnedChatMessageInfo
 */
class PinnedMessagesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new PinnedChatMessageInfoQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param PinnedChatMessageInfoQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return PinnedChatMessageInfoCollectionResponse
     */
    public function get(?PinnedChatMessageInfoQueryOptions $options = null, ?array $queryParameters = null): PinnedChatMessageInfoCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, PinnedChatMessageInfoCollectionResponse::class);
    }

    /**
     * Create a new PinnedChatMessageInfo
     *
     * @param PinnedChatMessageInfo $item The item to create
     * @return PinnedChatMessageInfo
     */
    public function post(PinnedChatMessageInfo $item): PinnedChatMessageInfo
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, PinnedChatMessageInfo::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return PinnedChatMessageInfoItemRequestBuilder
     */
    public function byId(string $id): PinnedChatMessageInfoItemRequestBuilder
    {
        return new PinnedChatMessageInfoItemRequestBuilder($this->client, $this->buildPath($id));
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
