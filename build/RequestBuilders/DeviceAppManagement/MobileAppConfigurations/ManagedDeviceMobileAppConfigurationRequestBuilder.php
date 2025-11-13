<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileAppConfigurations;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedDeviceMobileAppConfiguration;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileAppConfigurations\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileAppConfigurations\DeviceStatusesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileAppConfigurations\DeviceStatusSummaryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileAppConfigurations\AssignRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileAppConfigurations\UserStatusesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileAppConfigurations\UserStatusSummaryRequestBuilder;

/**
 * Request builder for /deviceAppManagement/mobileAppConfigurations/{managedDeviceMobileAppConfiguration-id}
 */
class ManagedDeviceMobileAppConfigurationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get managedDeviceMobileAppConfiguration
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ManagedDeviceMobileAppConfiguration|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ManagedDeviceMobileAppConfiguration|null
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
     * Deserialize response to ManagedDeviceMobileAppConfiguration|null
     */
    private function deserializeGet(string $body): ManagedDeviceMobileAppConfiguration|null    {
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
     * @return ManagedDeviceMobileAppConfiguration|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ManagedDeviceMobileAppConfiguration $body): ManagedDeviceMobileAppConfiguration|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ManagedDeviceMobileAppConfiguration|null
     */
    private function deserializePatch(string $body): ManagedDeviceMobileAppConfiguration|null    {
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
