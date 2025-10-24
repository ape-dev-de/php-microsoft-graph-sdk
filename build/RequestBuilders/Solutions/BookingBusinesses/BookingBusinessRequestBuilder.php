<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\BookingBusiness;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\AppointmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\CalendarViewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\CustomersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\CustomQuestionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\GetStaffAvailabilityRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\PublishRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\UnpublishRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\ServicesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BookingBusinesses\StaffMembersRequestBuilder;

/**
 * Request builder for /solutions/bookingBusinesses/{bookingBusiness-id}
 */
class BookingBusinessRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get bookingBusiness
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return BookingBusiness
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): BookingBusiness
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
     * Deserialize response to BookingBusiness
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
        return new BookingBusiness($data);
    }
    /**
     * Update bookingbusiness
     * @param BookingBusiness $body Request body
     * @return BookingBusiness
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(BookingBusiness $body): BookingBusiness
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to BookingBusiness
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
        return new BookingBusiness($data);
    }
    /**
     * Delete bookingBusiness
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
     * Navigate to appointments
     *
     * @return AppointmentsRequestBuilder
     */
    public function appointments(): AppointmentsRequestBuilder
    {
        return new AppointmentsRequestBuilder($this->client, $this->requestUrl . '/appointments');
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
     * Navigate to customers
     *
     * @return CustomersRequestBuilder
     */
    public function customers(): CustomersRequestBuilder
    {
        return new CustomersRequestBuilder($this->client, $this->requestUrl . '/customers');
    }
    /**
     * Navigate to customQuestions
     *
     * @return CustomQuestionsRequestBuilder
     */
    public function customQuestions(): CustomQuestionsRequestBuilder
    {
        return new CustomQuestionsRequestBuilder($this->client, $this->requestUrl . '/customQuestions');
    }
    /**
     * Navigate to getStaffAvailability
     *
     * @return GetStaffAvailabilityRequestBuilder
     */
    public function getStaffAvailability(): GetStaffAvailabilityRequestBuilder
    {
        return new GetStaffAvailabilityRequestBuilder($this->client, $this->requestUrl . '/getStaffAvailability');
    }
    /**
     * Navigate to publish
     *
     * @return PublishRequestBuilder
     */
    public function publish(): PublishRequestBuilder
    {
        return new PublishRequestBuilder($this->client, $this->requestUrl . '/publish');
    }
    /**
     * Navigate to unpublish
     *
     * @return UnpublishRequestBuilder
     */
    public function unpublish(): UnpublishRequestBuilder
    {
        return new UnpublishRequestBuilder($this->client, $this->requestUrl . '/unpublish');
    }
    /**
     * Navigate to services
     *
     * @return ServicesRequestBuilder
     */
    public function services(): ServicesRequestBuilder
    {
        return new ServicesRequestBuilder($this->client, $this->requestUrl . '/services');
    }
    /**
     * Navigate to staffMembers
     *
     * @return StaffMembersRequestBuilder
     */
    public function staffMembers(): StaffMembersRequestBuilder
    {
        return new StaffMembersRequestBuilder($this->client, $this->requestUrl . '/staffMembers');
    }
}
