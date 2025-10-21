<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Calendar;
use ApeDevDe\MicrosoftGraphSdk\Models\CalendarCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\CalendarQueryOptions;

/**
 * Request builder for Calendar
 */
class CalendarsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new CalendarQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param CalendarQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return CalendarCollectionResponse
     */
    public function get(?CalendarQueryOptions $options = null, ?array $queryParameters = null): CalendarCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, CalendarCollectionResponse::class);
    }

    /**
     * Create a new Calendar
     *
     * @param Calendar $item The item to create
     * @return Calendar
     */
    public function post(Calendar $item): Calendar
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Calendar::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return CalendarItemRequestBuilder
     */
    public function byId(string $id): CalendarItemRequestBuilder
    {
        return new CalendarItemRequestBuilder($this->client, $this->buildPath($id));
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
