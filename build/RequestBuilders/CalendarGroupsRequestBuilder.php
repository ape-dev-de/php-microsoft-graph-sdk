<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CalendarGroup;
use ApeDevDe\MicrosoftGraphSdk\Models\CalendarGroupCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\CalendarGroupQueryOptions;

/**
 * Request builder for CalendarGroup
 */
class CalendarGroupsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new CalendarGroupQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param CalendarGroupQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return CalendarGroupCollectionResponse
     */
    public function get(?CalendarGroupQueryOptions $options = null, ?array $queryParameters = null): CalendarGroupCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, CalendarGroupCollectionResponse::class);
    }

    /**
     * Create a new CalendarGroup
     *
     * @param CalendarGroup $item The item to create
     * @return CalendarGroup
     */
    public function post(CalendarGroup $item): CalendarGroup
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, CalendarGroup::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return CalendarGroupItemRequestBuilder
     */
    public function byId(string $id): CalendarGroupItemRequestBuilder
    {
        return new CalendarGroupItemRequestBuilder($this->client, $this->buildPath($id));
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
