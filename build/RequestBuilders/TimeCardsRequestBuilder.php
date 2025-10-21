<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TimeCard;
use ApeDevDe\MicrosoftGraphSdk\Models\TimeCardCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TimeCardQueryOptions;

/**
 * Request builder for TimeCard
 */
class TimeCardsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TimeCardQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param TimeCardQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TimeCardCollectionResponse
     */
    public function get(?TimeCardQueryOptions $options = null, ?array $queryParameters = null): TimeCardCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TimeCardCollectionResponse::class);
    }

    /**
     * Create a new TimeCard
     *
     * @param TimeCard $item The item to create
     * @return TimeCard
     */
    public function post(TimeCard $item): TimeCard
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, TimeCard::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return TimeCardItemRequestBuilder
     */
    public function byId(string $id): TimeCardItemRequestBuilder
    {
        return new TimeCardItemRequestBuilder($this->client, $this->buildPath($id));
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
     * Get clockIn request builder
     *
     * @return ClockInRequestBuilder
     */
    public function clockIn(): ClockInRequestBuilder
    {
        return new ClockInRequestBuilder($this->client, $this->buildPath('clockIn'));
    }

}
