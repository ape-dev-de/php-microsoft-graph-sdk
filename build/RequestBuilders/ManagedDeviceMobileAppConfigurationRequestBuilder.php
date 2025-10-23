<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedDeviceMobileAppConfiguration;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceStatusesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceStatusSummaryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AssignRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UserStatusesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UserStatusSummaryRequestBuilder;

/**
 * Request builder for {managedDeviceMobileAppConfiguration-id}
 */
class ManagedDeviceMobileAppConfigurationRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get managedDeviceMobileAppConfiguration
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ManagedDeviceMobileAppConfiguration
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ManagedDeviceMobileAppConfiguration
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
     * Deserialize response to ManagedDeviceMobileAppConfiguration
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
        return new ManagedDeviceMobileAppConfiguration($data);
    }
    /**
     * Update iosMobileAppConfiguration
     * @param ManagedDeviceMobileAppConfiguration $body Request body
     * @return ManagedDeviceMobileAppConfiguration
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ManagedDeviceMobileAppConfiguration $body): ManagedDeviceMobileAppConfiguration
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ManagedDeviceMobileAppConfiguration
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
        return new ManagedDeviceMobileAppConfiguration($data);
    }
    /**
     * Delete iosMobileAppConfiguration
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
     * Navigate to assignments
     *
     * @return AssignmentsRequestBuilder
     */
    public function assignments(): AssignmentsRequestBuilder
    {
        return new AssignmentsRequestBuilder($this->client, $this->requestUrl . '/assignments');
    }
    /**
     * Navigate to deviceStatuses
     *
     * @return DeviceStatusesRequestBuilder
     */
    public function deviceStatuses(): DeviceStatusesRequestBuilder
    {
        return new DeviceStatusesRequestBuilder($this->client, $this->requestUrl . '/deviceStatuses');
    }
    /**
     * Navigate to deviceStatusSummary
     *
     * @return DeviceStatusSummaryRequestBuilder
     */
    public function deviceStatusSummary(): DeviceStatusSummaryRequestBuilder
    {
        return new DeviceStatusSummaryRequestBuilder($this->client, $this->requestUrl . '/deviceStatusSummary');
    }
    /**
     * Navigate to assign
     *
     * @return AssignRequestBuilder
     */
    public function assign(): AssignRequestBuilder
    {
        return new AssignRequestBuilder($this->client, $this->requestUrl . '/assign');
    }
    /**
     * Navigate to userStatuses
     *
     * @return UserStatusesRequestBuilder
     */
    public function userStatuses(): UserStatusesRequestBuilder
    {
        return new UserStatusesRequestBuilder($this->client, $this->requestUrl . '/userStatuses');
    }
    /**
     * Navigate to userStatusSummary
     *
     * @return UserStatusSummaryRequestBuilder
     */
    public function userStatusSummary(): UserStatusSummaryRequestBuilder
    {
        return new UserStatusSummaryRequestBuilder($this->client, $this->requestUrl . '/userStatusSummary');
    }
}
