<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicies\ScheduledActionsForRule;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceComplianceScheduledActionForRule;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicies\ScheduledActionsForRule\ScheduledActionConfigurationsRequestBuilder;

/**
 * Request builder for /deviceManagement/deviceCompliancePolicies/{deviceCompliancePolicy-id}/scheduledActionsForRule/{deviceComplianceScheduledActionForRule-id}
 */
class DeviceComplianceScheduledActionForRuleRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get deviceComplianceScheduledActionForRule
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DeviceComplianceScheduledActionForRule|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DeviceComplianceScheduledActionForRule|null
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
     * Deserialize response to DeviceComplianceScheduledActionForRule|null
     */
    private function deserializeGet(string $body): DeviceComplianceScheduledActionForRule|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DeviceComplianceScheduledActionForRule($data);
    }
    /**
     * Update deviceComplianceScheduledActionForRule
     * @param DeviceComplianceScheduledActionForRule $body Request body
     * @return DeviceComplianceScheduledActionForRule|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(DeviceComplianceScheduledActionForRule $body): DeviceComplianceScheduledActionForRule|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to DeviceComplianceScheduledActionForRule|null
     */
    private function deserializePatch(string $body): DeviceComplianceScheduledActionForRule|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DeviceComplianceScheduledActionForRule($data);
    }
    /**
     * Delete deviceComplianceScheduledActionForRule
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
     * Navigate to scheduledActionConfigurations
     *
     * @return ScheduledActionConfigurationsRequestBuilder
     */
    public function scheduledActionConfigurations(): ScheduledActionConfigurationsRequestBuilder
    {
        return new ScheduledActionConfigurationsRequestBuilder($this->client, $this->requestUrl . '/scheduledActionConfigurations');
    }
}
