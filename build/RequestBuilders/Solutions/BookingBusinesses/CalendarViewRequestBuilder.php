<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\BookingAppointmentCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\BookingAppointment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\CalendarView\BookingAppointmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\CalendarView\CountRequestBuilder;

/**
 * Request builder for /solutions/bookingBusinesses/{bookingBusiness-id}/calendarView
 */
class CalendarViewRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List business calendarView
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param string $start The start date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T19:00:00-08:00
     * @param string $end The end date and time of the time range, represented in ISO 8601 format. For example, 2019-11-08T20:00:00-08:00
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return BookingAppointmentCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, string $start, string $end, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): BookingAppointmentCollectionResponse|null
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
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to BookingAppointmentCollectionResponse|null
     */
    private function deserializeGet(string $body): BookingAppointmentCollectionResponse|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new BookingAppointment($item);
        }
        $collection = new BookingAppointmentCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to calendarView for solutions
     * @param BookingAppointment $body Request body
     * @return BookingAppointment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(BookingAppointment $body): BookingAppointment|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to BookingAppointment|null
     */
    private function deserializePost(string $body): BookingAppointment|null    {
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
     * Get request builder for specific item by ID
     *
     * @param string $bookingAppointmentId The item ID
     * @return BookingAppointmentRequestBuilder
     */
    public function byId(string $bookingAppointmentId): BookingAppointmentRequestBuilder
    {
        return new BookingAppointmentRequestBuilder($this->client, $this->requestUrl . '/' . $bookingAppointmentId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
}
