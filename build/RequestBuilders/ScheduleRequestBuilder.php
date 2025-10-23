<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Schedule;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DayNotesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ShareRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OfferShiftRequestsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OpenShiftChangeRequestsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OpenShiftsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SchedulingGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ShiftsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SwapShiftsChangeRequestsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TimeCardsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TimeOffReasonsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TimeOffRequestsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TimesOffRequestBuilder;

/**
 * Request builder for schedule
 */
class ScheduleRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get schedule from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Schedule
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Schedule
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Schedule
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
        return new Schedule($data);
    }
    /**
     * Update the navigation property schedule in groups
     * @param Schedule $body Request body
     * @return Schedule
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function put(Schedule $body): Schedule
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->put($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePut($responseBody);
    }

    /**
     * Deserialize response to Schedule
     */
    private function deserializePut(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Schedule($data);
    }
    /**
     * Delete navigation property schedule for groups
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null) {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
    }
    /**
     * Navigate to dayNotes
     *
     * @return DayNotesRequestBuilder
     */
    public function dayNotes(): DayNotesRequestBuilder
    {
        return new DayNotesRequestBuilder($this->client, $this->requestUrl . '/dayNotes');
    }
    /**
     * Navigate to share
     *
     * @return ShareRequestBuilder
     */
    public function share(): ShareRequestBuilder
    {
        return new ShareRequestBuilder($this->client, $this->requestUrl . '/share');
    }
    /**
     * Navigate to offerShiftRequests
     *
     * @return OfferShiftRequestsRequestBuilder
     */
    public function offerShiftRequests(): OfferShiftRequestsRequestBuilder
    {
        return new OfferShiftRequestsRequestBuilder($this->client, $this->requestUrl . '/offerShiftRequests');
    }
    /**
     * Navigate to openShiftChangeRequests
     *
     * @return OpenShiftChangeRequestsRequestBuilder
     */
    public function openShiftChangeRequests(): OpenShiftChangeRequestsRequestBuilder
    {
        return new OpenShiftChangeRequestsRequestBuilder($this->client, $this->requestUrl . '/openShiftChangeRequests');
    }
    /**
     * Navigate to openShifts
     *
     * @return OpenShiftsRequestBuilder
     */
    public function openShifts(): OpenShiftsRequestBuilder
    {
        return new OpenShiftsRequestBuilder($this->client, $this->requestUrl . '/openShifts');
    }
    /**
     * Navigate to schedulingGroups
     *
     * @return SchedulingGroupsRequestBuilder
     */
    public function schedulingGroups(): SchedulingGroupsRequestBuilder
    {
        return new SchedulingGroupsRequestBuilder($this->client, $this->requestUrl . '/schedulingGroups');
    }
    /**
     * Navigate to shifts
     *
     * @return ShiftsRequestBuilder
     */
    public function shifts(): ShiftsRequestBuilder
    {
        return new ShiftsRequestBuilder($this->client, $this->requestUrl . '/shifts');
    }
    /**
     * Navigate to swapShiftsChangeRequests
     *
     * @return SwapShiftsChangeRequestsRequestBuilder
     */
    public function swapShiftsChangeRequests(): SwapShiftsChangeRequestsRequestBuilder
    {
        return new SwapShiftsChangeRequestsRequestBuilder($this->client, $this->requestUrl . '/swapShiftsChangeRequests');
    }
    /**
     * Navigate to timeCards
     *
     * @return TimeCardsRequestBuilder
     */
    public function timeCards(): TimeCardsRequestBuilder
    {
        return new TimeCardsRequestBuilder($this->client, $this->requestUrl . '/timeCards');
    }
    /**
     * Navigate to timeOffReasons
     *
     * @return TimeOffReasonsRequestBuilder
     */
    public function timeOffReasons(): TimeOffReasonsRequestBuilder
    {
        return new TimeOffReasonsRequestBuilder($this->client, $this->requestUrl . '/timeOffReasons');
    }
    /**
     * Navigate to timeOffRequests
     *
     * @return TimeOffRequestsRequestBuilder
     */
    public function timeOffRequests(): TimeOffRequestsRequestBuilder
    {
        return new TimeOffRequestsRequestBuilder($this->client, $this->requestUrl . '/timeOffRequests');
    }
    /**
     * Navigate to timesOff
     *
     * @return TimesOffRequestBuilder
     */
    public function timesOff(): TimesOffRequestBuilder
    {
        return new TimesOffRequestBuilder($this->client, $this->requestUrl . '/timesOff');
    }
}
