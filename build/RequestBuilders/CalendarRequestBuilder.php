<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Calendar;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\CalendarQueryOptions;

/**
 * Request builder for Calendar
 */
class CalendarRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
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
     * @return Calendar
     */
    public function get(?CalendarQueryOptions $options = null, ?array $queryParameters = null): Calendar
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Calendar::class);
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
     * Get calendarPermissions request builder
     *
     * @return CalendarPermissionsRequestBuilder
     */
    public function calendarPermissions(): CalendarPermissionsRequestBuilder
    {
        return new CalendarPermissionsRequestBuilder($this->client, $this->buildPath('calendarPermissions'));
    }

    /**
     * Get calendarView request builder
     *
     * @return CalendarViewRequestBuilder
     */
    public function calendarView(): CalendarViewRequestBuilder
    {
        return new CalendarViewRequestBuilder($this->client, $this->buildPath('calendarView'));
    }

    /**
     * Get events request builder
     *
     * @return EventsRequestBuilder
     */
    public function events(): EventsRequestBuilder
    {
        return new EventsRequestBuilder($this->client, $this->buildPath('events'));
    }

    /**
     * Get getSchedule request builder
     *
     * @return GetScheduleRequestBuilder
     */
    public function getSchedule(): GetScheduleRequestBuilder
    {
        return new GetScheduleRequestBuilder($this->client, $this->buildPath('getSchedule'));
    }

    /**
     * Get permanentDelete request builder
     *
     * @return PermanentDeleteRequestBuilder
     */
    public function permanentDelete(): PermanentDeleteRequestBuilder
    {
        return new PermanentDeleteRequestBuilder($this->client, $this->buildPath('permanentDelete'));
    }

}
