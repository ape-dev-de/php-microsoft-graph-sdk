<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Event;
use ApeDevDe\MicrosoftGraphSdk\Models\EventCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\EventQueryOptions;

/**
 * Request builder for Event
 */
class EventsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new EventQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param EventQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return EventCollectionResponse
     */
    public function get(?EventQueryOptions $options = null, ?array $queryParameters = null): EventCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, EventCollectionResponse::class);
    }

    /**
     * Create a new Event
     *
     * @param Event $item The item to create
     * @return Event
     */
    public function post(Event $item): Event
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Event::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return EventItemRequestBuilder
     */
    public function byId(string $id): EventItemRequestBuilder
    {
        return new EventItemRequestBuilder($this->client, $this->buildPath($id));
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
