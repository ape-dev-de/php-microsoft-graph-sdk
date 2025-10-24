<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceCompliancePolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicies\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicies\DeviceSettingStateSummariesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicies\DeviceStatusesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicies\DeviceStatusOverviewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicies\AssignRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicies\ScheduleActionsForRulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicies\ScheduledActionsForRuleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicies\UserStatusesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicies\UserStatusOverviewRequestBuilder;

/**
 * Request builder for /deviceManagement/deviceCompliancePolicies/{deviceCompliancePolicy-id}
 */
class DeviceCompliancePolicyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get windows10CompliancePolicy
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DeviceCompliancePolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DeviceCompliancePolicy
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
     * Deserialize response to DeviceCompliancePolicy
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
        return new DeviceCompliancePolicy($data);
    }
    /**
     * Update androidWorkProfileCompliancePolicy
     * @param DeviceCompliancePolicy $body Request body
     * @return DeviceCompliancePolicy
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(DeviceCompliancePolicy $body): DeviceCompliancePolicy
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to DeviceCompliancePolicy
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
        return new DeviceCompliancePolicy($data);
    }
    /**
     * Delete windows10CompliancePolicy
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
     * Navigate to assignments
     *
     * @return AssignmentsRequestBuilder
     */
    public function assignments(): AssignmentsRequestBuilder
    {
        return new AssignmentsRequestBuilder($this->client, $this->requestUrl . '/assignments');
    }
    /**
     * Navigate to deviceSettingStateSummaries
     *
     * @return DeviceSettingStateSummariesRequestBuilder
     */
    public function deviceSettingStateSummaries(): DeviceSettingStateSummariesRequestBuilder
    {
        return new DeviceSettingStateSummariesRequestBuilder($this->client, $this->requestUrl . '/deviceSettingStateSummaries');
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
     * Navigate to deviceStatusOverview
     *
     * @return DeviceStatusOverviewRequestBuilder
     */
    public function deviceStatusOverview(): DeviceStatusOverviewRequestBuilder
    {
        return new DeviceStatusOverviewRequestBuilder($this->client, $this->requestUrl . '/deviceStatusOverview');
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
     * Navigate to scheduleActionsForRules
     *
     * @return ScheduleActionsForRulesRequestBuilder
     */
    public function scheduleActionsForRules(): ScheduleActionsForRulesRequestBuilder
    {
        return new ScheduleActionsForRulesRequestBuilder($this->client, $this->requestUrl . '/scheduleActionsForRules');
    }
    /**
     * Navigate to scheduledActionsForRule
     *
     * @return ScheduledActionsForRuleRequestBuilder
     */
    public function scheduledActionsForRule(): ScheduledActionsForRuleRequestBuilder
    {
        return new ScheduledActionsForRuleRequestBuilder($this->client, $this->requestUrl . '/scheduledActionsForRule');
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
     * Navigate to userStatusOverview
     *
     * @return UserStatusOverviewRequestBuilder
     */
    public function userStatusOverview(): UserStatusOverviewRequestBuilder
    {
        return new UserStatusOverviewRequestBuilder($this->client, $this->requestUrl . '/userStatusOverview');
    }
}
