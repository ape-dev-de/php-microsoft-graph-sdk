<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\WindowsAutopilotDeviceIdentities;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WindowsAutopilotDeviceIdentity;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\WindowsAutopilotDeviceIdentities\AssignUserToDeviceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\WindowsAutopilotDeviceIdentities\UnassignUserFromDeviceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\WindowsAutopilotDeviceIdentities\UpdateDevicePropertiesRequestBuilder;

/**
 * Request builder for /deviceManagement/windowsAutopilotDeviceIdentities/{windowsAutopilotDeviceIdentity-id}
 */
class WindowsAutopilotDeviceIdentityRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get windowsAutopilotDeviceIdentity
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WindowsAutopilotDeviceIdentity
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WindowsAutopilotDeviceIdentity
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
     * Deserialize response to WindowsAutopilotDeviceIdentity
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
        return new WindowsAutopilotDeviceIdentity($data);
    }
    /**
     * Update the navigation property windowsAutopilotDeviceIdentities in deviceManagement
     * @param WindowsAutopilotDeviceIdentity $body Request body
     * @return WindowsAutopilotDeviceIdentity
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WindowsAutopilotDeviceIdentity $body): WindowsAutopilotDeviceIdentity
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WindowsAutopilotDeviceIdentity
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
        return new WindowsAutopilotDeviceIdentity($data);
    }
    /**
     * Delete windowsAutopilotDeviceIdentity
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
     * Navigate to assignUserToDevice
     *
     * @return AssignUserToDeviceRequestBuilder
     */
    public function assignUserToDevice(): AssignUserToDeviceRequestBuilder
    {
        return new AssignUserToDeviceRequestBuilder($this->client, $this->requestUrl . '/assignUserToDevice');
    }
    /**
     * Navigate to unassignUserFromDevice
     *
     * @return UnassignUserFromDeviceRequestBuilder
     */
    public function unassignUserFromDevice(): UnassignUserFromDeviceRequestBuilder
    {
        return new UnassignUserFromDeviceRequestBuilder($this->client, $this->requestUrl . '/unassignUserFromDevice');
    }
    /**
     * Navigate to updateDeviceProperties
     *
     * @return UpdateDevicePropertiesRequestBuilder
     */
    public function updateDeviceProperties(): UpdateDevicePropertiesRequestBuilder
    {
        return new UpdateDevicePropertiesRequestBuilder($this->client, $this->requestUrl . '/updateDeviceProperties');
    }
}
