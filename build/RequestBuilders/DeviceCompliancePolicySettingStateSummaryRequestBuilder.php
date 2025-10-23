<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceCompliancePolicySettingStateSummary;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceComplianceSettingStatesRequestBuilder;

/**
 * Request builder for {deviceCompliancePolicySettingStateSummary-id}
 */
class DeviceCompliancePolicySettingStateSummaryRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get deviceCompliancePolicySettingStateSummary
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DeviceCompliancePolicySettingStateSummary
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DeviceCompliancePolicySettingStateSummary
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
     * Deserialize response to DeviceCompliancePolicySettingStateSummary
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
        return new DeviceCompliancePolicySettingStateSummary($data);
    }
    /**
     * Update deviceCompliancePolicySettingStateSummary
     * @param DeviceCompliancePolicySettingStateSummary $body Request body
     * @return DeviceCompliancePolicySettingStateSummary
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(DeviceCompliancePolicySettingStateSummary $body): DeviceCompliancePolicySettingStateSummary
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to DeviceCompliancePolicySettingStateSummary
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
        return new DeviceCompliancePolicySettingStateSummary($data);
    }
    /**
     * Delete deviceCompliancePolicySettingStateSummary
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
     * Navigate to deviceComplianceSettingStates
     *
     * @return DeviceComplianceSettingStatesRequestBuilder
     */
    public function deviceComplianceSettingStates(): DeviceComplianceSettingStatesRequestBuilder
    {
        return new DeviceComplianceSettingStatesRequestBuilder($this->client, $this->requestUrl . '/deviceComplianceSettingStates');
    }
}
