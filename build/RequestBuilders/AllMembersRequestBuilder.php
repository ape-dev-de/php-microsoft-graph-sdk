<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ConversationMember;
use ApeDevDe\MicrosoftGraphSdk\Models\ConversationMemberCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ConversationMemberQueryOptions;

/**
 * Request builder for ConversationMember
 */
class AllMembersRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ConversationMemberQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ConversationMemberQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ConversationMemberCollectionResponse
     */
    public function get(?ConversationMemberQueryOptions $options = null, ?array $queryParameters = null): ConversationMemberCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ConversationMemberCollectionResponse::class);
    }

    /**
     * Create a new ConversationMember
     *
     * @param ConversationMember $item The item to create
     * @return ConversationMember
     */
    public function post(ConversationMember $item): ConversationMember
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ConversationMember::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ConversationMemberItemRequestBuilder
     */
    public function byId(string $id): ConversationMemberItemRequestBuilder
    {
        return new ConversationMemberItemRequestBuilder($this->client, $this->buildPath($id));
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
     * Get add request builder
     *
     * @return AddRequestBuilder
     */
    public function add(): AddRequestBuilder
    {
        return new AddRequestBuilder($this->client, $this->buildPath('add'));
    }

    /**
     * Get remove request builder
     *
     * @return RemoveRequestBuilder
     */
    public function remove(): RemoveRequestBuilder
    {
        return new RemoveRequestBuilder($this->client, $this->buildPath('remove'));
    }

}
