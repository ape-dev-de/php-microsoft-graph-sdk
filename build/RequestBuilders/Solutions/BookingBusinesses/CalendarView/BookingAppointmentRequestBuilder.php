<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\CalendarView;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\BookingAppointment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\CalendarView\CancelRequestBuilder;

/**
 * Request builder for /solutions/bookingBusinesses/{bookingBusiness-id}/calendarView/{bookingAppointment-id}
 */
class BookingAppointmentRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get calendarView from solutions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param string $start The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
     * @param string $end The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
     * @return BookingAppointment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, string $start, string $end): BookingAppointment|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($start !== null && $start !== '') {
            $queryParams['start'] = $start;
        }
        if ($end !== null && $end !== '') {
            $queryParams['end'] = $end;
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to BookingAppointment|null
     */
    private function deserializeGet(string $body): BookingAppointment|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new BookingAppointment($data);
    }
    /**
     * Update the navigation property calendarView in solutions
     * @param BookingAppointment $body Request body
     * @return BookingAppointment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(BookingAppointment $body): BookingAppointment|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to BookingAppointment|null
     */
    private function deserializePatch(string $body): BookingAppointment|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new BookingAppointment($data);
    }
    /**
     * Delete navigation property calendarView for solutions
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
    private function deserializeDelete(string $body): mixed    {
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
     * Navigate to cancel
     *
     * @return CancelRequestBuilder
     */
    public function cancel(): CancelRequestBuilder
    {
        return new CancelRequestBuilder($this->client, $this->requestUrl . '/cancel');
    }
}
