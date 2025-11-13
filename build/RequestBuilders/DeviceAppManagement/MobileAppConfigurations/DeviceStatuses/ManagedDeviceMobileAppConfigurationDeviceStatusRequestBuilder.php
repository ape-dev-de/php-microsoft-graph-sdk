<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\MobileAppConfigurations\DeviceStatuses;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedDeviceMobileAppConfigurationDeviceStatus;

/**
 * Request builder for /deviceAppManagement/mobileAppConfigurations/{managedDeviceMobileAppConfiguration-id}/deviceStatuses/{managedDeviceMobileAppConfigurationDeviceStatus-id}
 */
class ManagedDeviceMobileAppConfigurationDeviceStatusRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get managedDeviceMobileAppConfigurationDeviceStatus
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ManagedDeviceMobileAppConfigurationDeviceStatus|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ManagedDeviceMobileAppConfigurationDeviceStatus|null
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
     * Deserialize response to ManagedDeviceMobileAppConfigurationDeviceStatus|null
     */
    private function deserializeGet(string $body): ManagedDeviceMobileAppConfigurationDeviceStatus|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ManagedDeviceMobileAppConfigurationDeviceStatus($data);
    }
    /**
     * Update managedDeviceMobileAppConfigurationDeviceStatus
     * @param ManagedDeviceMobileAppConfigurationDeviceStatus $body Request body
     * @return ManagedDeviceMobileAppConfigurationDeviceStatus|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ManagedDeviceMobileAppConfigurationDeviceStatus $body): ManagedDeviceMobileAppConfigurationDeviceStatus|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ManagedDeviceMobileAppConfigurationDeviceStatus|null
     */
    private function deserializePatch(string $body): ManagedDeviceMobileAppConfigurationDeviceStatus|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ManagedDeviceMobileAppConfigurationDeviceStatus($data);
    }
    /**
     * Delete managedDeviceMobileAppConfigurationDeviceStatus
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
}
