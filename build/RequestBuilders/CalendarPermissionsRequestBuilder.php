<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CalendarPermission;
use ApeDevDe\MicrosoftGraphSdk\Models\CalendarPermissionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\CalendarPermissionQueryOptions;

/**
 * Request builder for CalendarPermission
 */
class CalendarPermissionsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new CalendarPermissionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param CalendarPermissionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return CalendarPermissionCollectionResponse
     */
    public function get(?CalendarPermissionQueryOptions $options = null, ?array $queryParameters = null): CalendarPermissionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, CalendarPermissionCollectionResponse::class);
    }

    /**
     * Create a new CalendarPermission
     *
     * @param CalendarPermission $item The item to create
     * @return CalendarPermission
     */
    public function post(CalendarPermission $item): CalendarPermission
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, CalendarPermission::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return CalendarPermissionItemRequestBuilder
     */
    public function byId(string $id): CalendarPermissionItemRequestBuilder
    {
        return new CalendarPermissionItemRequestBuilder($this->client, $this->buildPath($id));
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
