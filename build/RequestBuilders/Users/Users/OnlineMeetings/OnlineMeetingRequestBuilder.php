<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\OnlineMeetings;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OnlineMeeting;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\OnlineMeetings\AttendanceReportsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\OnlineMeetings\AttendeeReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\OnlineMeetings\GetVirtualAppointmentJoinWebUrlRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\OnlineMeetings\SendVirtualAppointmentReminderSmsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\OnlineMeetings\SendVirtualAppointmentSmsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\OnlineMeetings\RecordingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\OnlineMeetings\TranscriptsRequestBuilder;

/**
 * Request builder for /users/{user-id}/onlineMeetings/{onlineMeeting-id}
 */
class OnlineMeetingRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get onlineMeetings from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return OnlineMeeting
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): OnlineMeeting
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
     * Deserialize response to OnlineMeeting
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
        return new OnlineMeeting($data);
    }
    /**
     * Update the navigation property onlineMeetings in users
     * @param OnlineMeeting $body Request body
     * @return OnlineMeeting
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(OnlineMeeting $body): OnlineMeeting
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to OnlineMeeting
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new OnlineMeeting($data);
    }
    /**
     * Delete navigation property onlineMeetings for users
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
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
     * Navigate to attendanceReports
     *
     * @return AttendanceReportsRequestBuilder
     */
    public function attendanceReports(): AttendanceReportsRequestBuilder
    {
        return new AttendanceReportsRequestBuilder($this->client, $this->requestUrl . '/attendanceReports');
    }
    /**
     * Navigate to attendeeReport
     *
     * @return AttendeeReportRequestBuilder
     */
    public function attendeeReport(): AttendeeReportRequestBuilder
    {
        return new AttendeeReportRequestBuilder($this->client, $this->requestUrl . '/attendeeReport');
    }
    /**
     * Navigate to getVirtualAppointmentJoinWebUrl()
     *
     * @return GetVirtualAppointmentJoinWebUrlRequestBuilder
     */
    public function getVirtualAppointmentJoinWebUrl(): GetVirtualAppointmentJoinWebUrlRequestBuilder
    {
        return new GetVirtualAppointmentJoinWebUrlRequestBuilder($this->client, $this->requestUrl . '/getVirtualAppointmentJoinWebUrl()');
    }
    /**
     * Navigate to sendVirtualAppointmentReminderSms
     *
     * @return SendVirtualAppointmentReminderSmsRequestBuilder
     */
    public function sendVirtualAppointmentReminderSms(): SendVirtualAppointmentReminderSmsRequestBuilder
    {
        return new SendVirtualAppointmentReminderSmsRequestBuilder($this->client, $this->requestUrl . '/sendVirtualAppointmentReminderSms');
    }
    /**
     * Navigate to sendVirtualAppointmentSms
     *
     * @return SendVirtualAppointmentSmsRequestBuilder
     */
    public function sendVirtualAppointmentSms(): SendVirtualAppointmentSmsRequestBuilder
    {
        return new SendVirtualAppointmentSmsRequestBuilder($this->client, $this->requestUrl . '/sendVirtualAppointmentSms');
    }
    /**
     * Navigate to recordings
     *
     * @return RecordingsRequestBuilder
     */
    public function recordings(): RecordingsRequestBuilder
    {
        return new RecordingsRequestBuilder($this->client, $this->requestUrl . '/recordings');
    }
    /**
     * Navigate to transcripts
     *
     * @return TranscriptsRequestBuilder
     */
    public function transcripts(): TranscriptsRequestBuilder
    {
        return new TranscriptsRequestBuilder($this->client, $this->requestUrl . '/transcripts');
    }
}
