<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Calendar;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Calendar\CalendarPermissionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Calendar\CalendarViewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Calendar\EventsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Calendar\AllowedCalendarSharingRolesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Calendar\GetScheduleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Calendar\PermanentDeleteRequestBuilder;

/**
 * Request builder for /groups/{group-id}/calendar
 */
class CalendarRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get calendar from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Calendar
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Calendar
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Calendar
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Calendar($data);
    }
    /**
     * Navigate to calendarPermissions
     *
     * @return CalendarPermissionsRequestBuilder
     */
    public function calendarPermissions(): CalendarPermissionsRequestBuilder
    {
        return new CalendarPermissionsRequestBuilder($this->client, $this->requestUrl . '/calendarPermissions');
    }
    /**
     * Navigate to calendarView
     *
     * @return CalendarViewRequestBuilder
     */
    public function calendarView(): CalendarViewRequestBuilder
    {
        return new CalendarViewRequestBuilder($this->client, $this->requestUrl . '/calendarView');
    }
    /**
     * Navigate to events
     *
     * @return EventsRequestBuilder
     */
    public function events(): EventsRequestBuilder
    {
        return new EventsRequestBuilder($this->client, $this->requestUrl . '/events');
    }
    /**
     * Navigate to getSchedule
     *
     * @return GetScheduleRequestBuilder
     */
    public function getSchedule(): GetScheduleRequestBuilder
    {
        return new GetScheduleRequestBuilder($this->client, $this->requestUrl . '/getSchedule');
    }
    /**
     * Navigate to permanentDelete
     *
     * @return PermanentDeleteRequestBuilder
     */
    public function permanentDelete(): PermanentDeleteRequestBuilder
    {
        return new PermanentDeleteRequestBuilder($this->client, $this->requestUrl . '/permanentDelete');
    }
}
