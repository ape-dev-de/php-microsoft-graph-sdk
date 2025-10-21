<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Schedule;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ScheduleQueryOptions;

/**
 * Request builder for Schedule
 */
class ScheduleRequestBuilder extends BaseRequestBuilder
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
     * @param ScheduleQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Schedule
     */
    public function get(?ScheduleQueryOptions $options = null, ?array $queryParameters = null): Schedule
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Schedule::class);
    }

    /**
     * Create a new Schedule
     *
     * @param Schedule $item The item to create
     * @return Schedule
     */
    public function post(Schedule $item): Schedule
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Schedule::class);
    }
    /**
     * Get dayNotes request builder
     *
     * @return DayNotesRequestBuilder
     */
    public function dayNotes(): DayNotesRequestBuilder
    {
        return new DayNotesRequestBuilder($this->client, $this->buildPath('dayNotes'));
    }

    /**
     * Get share request builder
     *
     * @return ShareRequestBuilder
     */
    public function share(): ShareRequestBuilder
    {
        return new ShareRequestBuilder($this->client, $this->buildPath('share'));
    }

    /**
     * Get offerShiftRequests request builder
     *
     * @return OfferShiftRequestsRequestBuilder
     */
    public function offerShiftRequests(): OfferShiftRequestsRequestBuilder
    {
        return new OfferShiftRequestsRequestBuilder($this->client, $this->buildPath('offerShiftRequests'));
    }

    /**
     * Get openShiftChangeRequests request builder
     *
     * @return OpenShiftChangeRequestsRequestBuilder
     */
    public function openShiftChangeRequests(): OpenShiftChangeRequestsRequestBuilder
    {
        return new OpenShiftChangeRequestsRequestBuilder($this->client, $this->buildPath('openShiftChangeRequests'));
    }

    /**
     * Get openShifts request builder
     *
     * @return OpenShiftsRequestBuilder
     */
    public function openShifts(): OpenShiftsRequestBuilder
    {
        return new OpenShiftsRequestBuilder($this->client, $this->buildPath('openShifts'));
    }

    /**
     * Get schedulingGroups request builder
     *
     * @return SchedulingGroupsRequestBuilder
     */
    public function schedulingGroups(): SchedulingGroupsRequestBuilder
    {
        return new SchedulingGroupsRequestBuilder($this->client, $this->buildPath('schedulingGroups'));
    }

    /**
     * Get shifts request builder
     *
     * @return ShiftsRequestBuilder
     */
    public function shifts(): ShiftsRequestBuilder
    {
        return new ShiftsRequestBuilder($this->client, $this->buildPath('shifts'));
    }

    /**
     * Get swapShiftsChangeRequests request builder
     *
     * @return SwapShiftsChangeRequestsRequestBuilder
     */
    public function swapShiftsChangeRequests(): SwapShiftsChangeRequestsRequestBuilder
    {
        return new SwapShiftsChangeRequestsRequestBuilder($this->client, $this->buildPath('swapShiftsChangeRequests'));
    }

    /**
     * Get timeCards request builder
     *
     * @return TimeCardsRequestBuilder
     */
    public function timeCards(): TimeCardsRequestBuilder
    {
        return new TimeCardsRequestBuilder($this->client, $this->buildPath('timeCards'));
    }

    /**
     * Get timeOffReasons request builder
     *
     * @return TimeOffReasonsRequestBuilder
     */
    public function timeOffReasons(): TimeOffReasonsRequestBuilder
    {
        return new TimeOffReasonsRequestBuilder($this->client, $this->buildPath('timeOffReasons'));
    }

    /**
     * Get timeOffRequests request builder
     *
     * @return TimeOffRequestsRequestBuilder
     */
    public function timeOffRequests(): TimeOffRequestsRequestBuilder
    {
        return new TimeOffRequestsRequestBuilder($this->client, $this->buildPath('timeOffRequests'));
    }

    /**
     * Get timesOff request builder
     *
     * @return TimesOffRequestBuilder
     */
    public function timesOff(): TimesOffRequestBuilder
    {
        return new TimesOffRequestBuilder($this->client, $this->buildPath('timesOff'));
    }

}
