<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\MessageRule;
use ApeDevDe\MicrosoftGraphSdk\Models\MessageRuleCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\MessageRuleQueryOptions;

/**
 * Request builder for MessageRule
 */
class MessageRulesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new MessageRuleQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param MessageRuleQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return MessageRuleCollectionResponse
     */
    public function get(?MessageRuleQueryOptions $options = null, ?array $queryParameters = null): MessageRuleCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, MessageRuleCollectionResponse::class);
    }

    /**
     * Create a new MessageRule
     *
     * @param MessageRule $item The item to create
     * @return MessageRule
     */
    public function post(MessageRule $item): MessageRule
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, MessageRule::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return MessageRuleItemRequestBuilder
     */
    public function byId(string $id): MessageRuleItemRequestBuilder
    {
        return new MessageRuleItemRequestBuilder($this->client, $this->buildPath($id));
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
