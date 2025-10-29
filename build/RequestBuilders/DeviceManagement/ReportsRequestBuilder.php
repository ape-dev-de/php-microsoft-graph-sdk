<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceManagementReports;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\ExportJobsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetCachedReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetCompliancePolicyNonComplianceReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetCompliancePolicyNonComplianceSummaryReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetComplianceSettingNonComplianceReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetConfigurationPolicyNonComplianceReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetConfigurationSettingNonComplianceReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetDeviceManagementIntentSettingsReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetDeviceNonComplianceReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetDevicesWithoutCompliancePolicyReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetHistoricalReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetNoncompliantDevicesAndSettingsReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetPolicyNonComplianceMetadataRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetPolicyNonComplianceReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetPolicyNonComplianceSummaryReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetReportFiltersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\GetSettingNonComplianceReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\Reports\RetrieveDeviceAppInstallationStatusReportRequestBuilder;

/**
 * Request builder for /deviceManagement/reports
 */
class ReportsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get deviceManagementReports
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DeviceManagementReports
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DeviceManagementReports
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
     * Deserialize response to DeviceManagementReports
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
        return new DeviceManagementReports($data);
    }
    /**
     * Update deviceManagementReports
     * @param DeviceManagementReports $body Request body
     * @return DeviceManagementReports
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(DeviceManagementReports $body): DeviceManagementReports
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to DeviceManagementReports
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
        return new DeviceManagementReports($data);
    }
    /**
     * Delete navigation property reports for deviceManagement
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
     * Navigate to exportJobs
     *
     * @return ExportJobsRequestBuilder
     */
    public function exportJobs(): ExportJobsRequestBuilder
    {
        return new ExportJobsRequestBuilder($this->client, $this->requestUrl . '/exportJobs');
    }
    /**
     * Navigate to getCachedReport
     *
     * @return GetCachedReportRequestBuilder
     */
    public function getCachedReport(): GetCachedReportRequestBuilder
    {
        return new GetCachedReportRequestBuilder($this->client, $this->requestUrl . '/getCachedReport');
    }
    /**
     * Navigate to getCompliancePolicyNonComplianceReport
     *
     * @return GetCompliancePolicyNonComplianceReportRequestBuilder
     */
    public function getCompliancePolicyNonComplianceReport(): GetCompliancePolicyNonComplianceReportRequestBuilder
    {
        return new GetCompliancePolicyNonComplianceReportRequestBuilder($this->client, $this->requestUrl . '/getCompliancePolicyNonComplianceReport');
    }
    /**
     * Navigate to getCompliancePolicyNonComplianceSummaryReport
     *
     * @return GetCompliancePolicyNonComplianceSummaryReportRequestBuilder
     */
    public function getCompliancePolicyNonComplianceSummaryReport(): GetCompliancePolicyNonComplianceSummaryReportRequestBuilder
    {
        return new GetCompliancePolicyNonComplianceSummaryReportRequestBuilder($this->client, $this->requestUrl . '/getCompliancePolicyNonComplianceSummaryReport');
    }
    /**
     * Navigate to getComplianceSettingNonComplianceReport
     *
     * @return GetComplianceSettingNonComplianceReportRequestBuilder
     */
    public function getComplianceSettingNonComplianceReport(): GetComplianceSettingNonComplianceReportRequestBuilder
    {
        return new GetComplianceSettingNonComplianceReportRequestBuilder($this->client, $this->requestUrl . '/getComplianceSettingNonComplianceReport');
    }
    /**
     * Navigate to getConfigurationPolicyNonComplianceReport
     *
     * @return GetConfigurationPolicyNonComplianceReportRequestBuilder
     */
    public function getConfigurationPolicyNonComplianceReport(): GetConfigurationPolicyNonComplianceReportRequestBuilder
    {
        return new GetConfigurationPolicyNonComplianceReportRequestBuilder($this->client, $this->requestUrl . '/getConfigurationPolicyNonComplianceReport');
    }
    /**
     * Navigate to getConfigurationPolicyNonComplianceSummaryReport
     *
     * @return GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder
     */
    public function getConfigurationPolicyNonComplianceSummaryReport(): GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder
    {
        return new GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder($this->client, $this->requestUrl . '/getConfigurationPolicyNonComplianceSummaryReport');
    }
    /**
     * Navigate to getConfigurationSettingNonComplianceReport
     *
     * @return GetConfigurationSettingNonComplianceReportRequestBuilder
     */
    public function getConfigurationSettingNonComplianceReport(): GetConfigurationSettingNonComplianceReportRequestBuilder
    {
        return new GetConfigurationSettingNonComplianceReportRequestBuilder($this->client, $this->requestUrl . '/getConfigurationSettingNonComplianceReport');
    }
    /**
     * Navigate to getDeviceManagementIntentPerSettingContributingProfiles
     *
     * @return GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder
     */
    public function getDeviceManagementIntentPerSettingContributingProfiles(): GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder
    {
        return new GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder($this->client, $this->requestUrl . '/getDeviceManagementIntentPerSettingContributingProfiles');
    }
    /**
     * Navigate to getDeviceManagementIntentSettingsReport
     *
     * @return GetDeviceManagementIntentSettingsReportRequestBuilder
     */
    public function getDeviceManagementIntentSettingsReport(): GetDeviceManagementIntentSettingsReportRequestBuilder
    {
        return new GetDeviceManagementIntentSettingsReportRequestBuilder($this->client, $this->requestUrl . '/getDeviceManagementIntentSettingsReport');
    }
    /**
     * Navigate to getDeviceNonComplianceReport
     *
     * @return GetDeviceNonComplianceReportRequestBuilder
     */
    public function getDeviceNonComplianceReport(): GetDeviceNonComplianceReportRequestBuilder
    {
        return new GetDeviceNonComplianceReportRequestBuilder($this->client, $this->requestUrl . '/getDeviceNonComplianceReport');
    }
    /**
     * Navigate to getDevicesWithoutCompliancePolicyReport
     *
     * @return GetDevicesWithoutCompliancePolicyReportRequestBuilder
     */
    public function getDevicesWithoutCompliancePolicyReport(): GetDevicesWithoutCompliancePolicyReportRequestBuilder
    {
        return new GetDevicesWithoutCompliancePolicyReportRequestBuilder($this->client, $this->requestUrl . '/getDevicesWithoutCompliancePolicyReport');
    }
    /**
     * Navigate to getHistoricalReport
     *
     * @return GetHistoricalReportRequestBuilder
     */
    public function getHistoricalReport(): GetHistoricalReportRequestBuilder
    {
        return new GetHistoricalReportRequestBuilder($this->client, $this->requestUrl . '/getHistoricalReport');
    }
    /**
     * Navigate to getNoncompliantDevicesAndSettingsReport
     *
     * @return GetNoncompliantDevicesAndSettingsReportRequestBuilder
     */
    public function getNoncompliantDevicesAndSettingsReport(): GetNoncompliantDevicesAndSettingsReportRequestBuilder
    {
        return new GetNoncompliantDevicesAndSettingsReportRequestBuilder($this->client, $this->requestUrl . '/getNoncompliantDevicesAndSettingsReport');
    }
    /**
     * Navigate to getPolicyNonComplianceMetadata
     *
     * @return GetPolicyNonComplianceMetadataRequestBuilder
     */
    public function getPolicyNonComplianceMetadata(): GetPolicyNonComplianceMetadataRequestBuilder
    {
        return new GetPolicyNonComplianceMetadataRequestBuilder($this->client, $this->requestUrl . '/getPolicyNonComplianceMetadata');
    }
    /**
     * Navigate to getPolicyNonComplianceReport
     *
     * @return GetPolicyNonComplianceReportRequestBuilder
     */
    public function getPolicyNonComplianceReport(): GetPolicyNonComplianceReportRequestBuilder
    {
        return new GetPolicyNonComplianceReportRequestBuilder($this->client, $this->requestUrl . '/getPolicyNonComplianceReport');
    }
    /**
     * Navigate to getPolicyNonComplianceSummaryReport
     *
     * @return GetPolicyNonComplianceSummaryReportRequestBuilder
     */
    public function getPolicyNonComplianceSummaryReport(): GetPolicyNonComplianceSummaryReportRequestBuilder
    {
        return new GetPolicyNonComplianceSummaryReportRequestBuilder($this->client, $this->requestUrl . '/getPolicyNonComplianceSummaryReport');
    }
    /**
     * Navigate to getReportFilters
     *
     * @return GetReportFiltersRequestBuilder
     */
    public function getReportFilters(): GetReportFiltersRequestBuilder
    {
        return new GetReportFiltersRequestBuilder($this->client, $this->requestUrl . '/getReportFilters');
    }
    /**
     * Navigate to getSettingNonComplianceReport
     *
     * @return GetSettingNonComplianceReportRequestBuilder
     */
    public function getSettingNonComplianceReport(): GetSettingNonComplianceReportRequestBuilder
    {
        return new GetSettingNonComplianceReportRequestBuilder($this->client, $this->requestUrl . '/getSettingNonComplianceReport');
    }
    /**
     * Navigate to retrieveDeviceAppInstallationStatusReport
     *
     * @return RetrieveDeviceAppInstallationStatusReportRequestBuilder
     */
    public function retrieveDeviceAppInstallationStatusReport(): RetrieveDeviceAppInstallationStatusReportRequestBuilder
    {
        return new RetrieveDeviceAppInstallationStatusReportRequestBuilder($this->client, $this->requestUrl . '/retrieveDeviceAppInstallationStatusReport');
    }
}
