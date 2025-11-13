<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceManagement;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\ApplePushNotificationCertificateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\AuditEventsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\ComplianceManagementPartnersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\ConditionalAccessSettingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DetectedAppsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCategoriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicyDeviceStateSummaryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceCompliancePolicySettingStateSummariesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceConfigurationDeviceStateSummariesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceConfigurationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceEnrollmentConfigurationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceManagementPartnersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\ExchangeConnectorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\IosUpdateStatusesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\ManagedDeviceOverviewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\ManagedDevicesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\GetEffectivePermissionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsSummarizeWorkFromAnywhereDevicesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\VerifyWindowsEnrollmentAutoDiscoveryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\MobileAppTroubleshootingEventsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\MobileThreatDefenseConnectorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\NotificationMessageTemplatesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\RemoteAssistancePartnersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\ReportsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\ResourceOperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\RoleAssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\RoleDefinitionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\SoftwareUpdateStatusSummaryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\TelecomExpenseManagementPartnersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\TermsAndConditionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\TroubleshootingEventsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetailsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceIdRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsAppHealthDeviceModelPerformanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsAppHealthDevicePerformanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsAppHealthOSVersionPerformanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsAppHealthOverviewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsBaselinesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsCategoriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsDevicePerformanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsDeviceScoresRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsDeviceStartupHistoryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcessesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsMetricHistoryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsModelScoresRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsOverviewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsScoreHistoryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\VirtualEndpointRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\WindowsAutopilotDeviceIdentitiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\WindowsInformationProtectionAppLearningSummariesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\WindowsInformationProtectionNetworkLearningSummariesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\WindowsMalwareInformationRequestBuilder;

/**
 * Request builder for /deviceManagement
 */
class DeviceManagementRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get deviceManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DeviceManagement|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DeviceManagement|null
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
     * Deserialize response to DeviceManagement|null
     */
    private function deserializeGet(string $body): DeviceManagement|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DeviceManagement($data);
    }
    /**
     * Update deviceManagement
     * @param DeviceManagement $body Request body
     * @return DeviceManagement|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(DeviceManagement $body): DeviceManagement|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to DeviceManagement|null
     */
    private function deserializePatch(string $body): DeviceManagement|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DeviceManagement($data);
    }
    /**
     * Navigate to applePushNotificationCertificate
     *
     * @return ApplePushNotificationCertificateRequestBuilder
     */
    public function applePushNotificationCertificate(): ApplePushNotificationCertificateRequestBuilder
    {
        return new ApplePushNotificationCertificateRequestBuilder($this->client, $this->requestUrl . '/applePushNotificationCertificate');
    }
    /**
     * Navigate to auditEvents
     *
     * @return AuditEventsRequestBuilder
     */
    public function auditEvents(): AuditEventsRequestBuilder
    {
        return new AuditEventsRequestBuilder($this->client, $this->requestUrl . '/auditEvents');
    }
    /**
     * Navigate to complianceManagementPartners
     *
     * @return ComplianceManagementPartnersRequestBuilder
     */
    public function complianceManagementPartners(): ComplianceManagementPartnersRequestBuilder
    {
        return new ComplianceManagementPartnersRequestBuilder($this->client, $this->requestUrl . '/complianceManagementPartners');
    }
    /**
     * Navigate to conditionalAccessSettings
     *
     * @return ConditionalAccessSettingsRequestBuilder
     */
    public function conditionalAccessSettings(): ConditionalAccessSettingsRequestBuilder
    {
        return new ConditionalAccessSettingsRequestBuilder($this->client, $this->requestUrl . '/conditionalAccessSettings');
    }
    /**
     * Navigate to detectedApps
     *
     * @return DetectedAppsRequestBuilder
     */
    public function detectedApps(): DetectedAppsRequestBuilder
    {
        return new DetectedAppsRequestBuilder($this->client, $this->requestUrl . '/detectedApps');
    }
    /**
     * Navigate to deviceCategories
     *
     * @return DeviceCategoriesRequestBuilder
     */
    public function deviceCategories(): DeviceCategoriesRequestBuilder
    {
        return new DeviceCategoriesRequestBuilder($this->client, $this->requestUrl . '/deviceCategories');
    }
    /**
     * Navigate to deviceCompliancePolicies
     *
     * @return DeviceCompliancePoliciesRequestBuilder
     */
    public function deviceCompliancePolicies(): DeviceCompliancePoliciesRequestBuilder
    {
        return new DeviceCompliancePoliciesRequestBuilder($this->client, $this->requestUrl . '/deviceCompliancePolicies');
    }
    /**
     * Navigate to deviceCompliancePolicyDeviceStateSummary
     *
     * @return DeviceCompliancePolicyDeviceStateSummaryRequestBuilder
     */
    public function deviceCompliancePolicyDeviceStateSummary(): DeviceCompliancePolicyDeviceStateSummaryRequestBuilder
    {
        return new DeviceCompliancePolicyDeviceStateSummaryRequestBuilder($this->client, $this->requestUrl . '/deviceCompliancePolicyDeviceStateSummary');
    }
    /**
     * Navigate to deviceCompliancePolicySettingStateSummaries
     *
     * @return DeviceCompliancePolicySettingStateSummariesRequestBuilder
     */
    public function deviceCompliancePolicySettingStateSummaries(): DeviceCompliancePolicySettingStateSummariesRequestBuilder
    {
        return new DeviceCompliancePolicySettingStateSummariesRequestBuilder($this->client, $this->requestUrl . '/deviceCompliancePolicySettingStateSummaries');
    }
    /**
     * Navigate to deviceConfigurationDeviceStateSummaries
     *
     * @return DeviceConfigurationDeviceStateSummariesRequestBuilder
     */
    public function deviceConfigurationDeviceStateSummaries(): DeviceConfigurationDeviceStateSummariesRequestBuilder
    {
        return new DeviceConfigurationDeviceStateSummariesRequestBuilder($this->client, $this->requestUrl . '/deviceConfigurationDeviceStateSummaries');
    }
    /**
     * Navigate to deviceConfigurations
     *
     * @return DeviceConfigurationsRequestBuilder
     */
    public function deviceConfigurations(): DeviceConfigurationsRequestBuilder
    {
        return new DeviceConfigurationsRequestBuilder($this->client, $this->requestUrl . '/deviceConfigurations');
    }
    /**
     * Navigate to deviceEnrollmentConfigurations
     *
     * @return DeviceEnrollmentConfigurationsRequestBuilder
     */
    public function deviceEnrollmentConfigurations(): DeviceEnrollmentConfigurationsRequestBuilder
    {
        return new DeviceEnrollmentConfigurationsRequestBuilder($this->client, $this->requestUrl . '/deviceEnrollmentConfigurations');
    }
    /**
     * Navigate to deviceManagementPartners
     *
     * @return DeviceManagementPartnersRequestBuilder
     */
    public function deviceManagementPartners(): DeviceManagementPartnersRequestBuilder
    {
        return new DeviceManagementPartnersRequestBuilder($this->client, $this->requestUrl . '/deviceManagementPartners');
    }
    /**
     * Navigate to exchangeConnectors
     *
     * @return ExchangeConnectorsRequestBuilder
     */
    public function exchangeConnectors(): ExchangeConnectorsRequestBuilder
    {
        return new ExchangeConnectorsRequestBuilder($this->client, $this->requestUrl . '/exchangeConnectors');
    }
    /**
     * Navigate to importedWindowsAutopilotDeviceIdentities
     *
     * @return ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder
     */
    public function importedWindowsAutopilotDeviceIdentities(): ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder
    {
        return new ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder($this->client, $this->requestUrl . '/importedWindowsAutopilotDeviceIdentities');
    }
    /**
     * Navigate to iosUpdateStatuses
     *
     * @return IosUpdateStatusesRequestBuilder
     */
    public function iosUpdateStatuses(): IosUpdateStatusesRequestBuilder
    {
        return new IosUpdateStatusesRequestBuilder($this->client, $this->requestUrl . '/iosUpdateStatuses');
    }
    /**
     * Navigate to managedDeviceOverview
     *
     * @return ManagedDeviceOverviewRequestBuilder
     */
    public function managedDeviceOverview(): ManagedDeviceOverviewRequestBuilder
    {
        return new ManagedDeviceOverviewRequestBuilder($this->client, $this->requestUrl . '/managedDeviceOverview');
    }
    /**
     * Navigate to managedDevices
     *
     * @return ManagedDevicesRequestBuilder
     */
    public function managedDevices(): ManagedDevicesRequestBuilder
    {
        return new ManagedDevicesRequestBuilder($this->client, $this->requestUrl . '/managedDevices');
    }
    /**
     * Navigate to userExperienceAnalyticsSummarizeWorkFromAnywhereDevices()
     *
     * @return UserExperienceAnalyticsSummarizeWorkFromAnywhereDevicesRequestBuilder
     */
    public function userExperienceAnalyticsSummarizeWorkFromAnywhereDevices(): UserExperienceAnalyticsSummarizeWorkFromAnywhereDevicesRequestBuilder
    {
        return new UserExperienceAnalyticsSummarizeWorkFromAnywhereDevicesRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsSummarizeWorkFromAnywhereDevices()');
    }
    /**
     * Navigate to mobileAppTroubleshootingEvents
     *
     * @return MobileAppTroubleshootingEventsRequestBuilder
     */
    public function mobileAppTroubleshootingEvents(): MobileAppTroubleshootingEventsRequestBuilder
    {
        return new MobileAppTroubleshootingEventsRequestBuilder($this->client, $this->requestUrl . '/mobileAppTroubleshootingEvents');
    }
    /**
     * Navigate to mobileThreatDefenseConnectors
     *
     * @return MobileThreatDefenseConnectorsRequestBuilder
     */
    public function mobileThreatDefenseConnectors(): MobileThreatDefenseConnectorsRequestBuilder
    {
        return new MobileThreatDefenseConnectorsRequestBuilder($this->client, $this->requestUrl . '/mobileThreatDefenseConnectors');
    }
    /**
     * Navigate to notificationMessageTemplates
     *
     * @return NotificationMessageTemplatesRequestBuilder
     */
    public function notificationMessageTemplates(): NotificationMessageTemplatesRequestBuilder
    {
        return new NotificationMessageTemplatesRequestBuilder($this->client, $this->requestUrl . '/notificationMessageTemplates');
    }
    /**
     * Navigate to remoteAssistancePartners
     *
     * @return RemoteAssistancePartnersRequestBuilder
     */
    public function remoteAssistancePartners(): RemoteAssistancePartnersRequestBuilder
    {
        return new RemoteAssistancePartnersRequestBuilder($this->client, $this->requestUrl . '/remoteAssistancePartners');
    }
    /**
     * Navigate to reports
     *
     * @return ReportsRequestBuilder
     */
    public function reports(): ReportsRequestBuilder
    {
        return new ReportsRequestBuilder($this->client, $this->requestUrl . '/reports');
    }
    /**
     * Navigate to resourceOperations
     *
     * @return ResourceOperationsRequestBuilder
     */
    public function resourceOperations(): ResourceOperationsRequestBuilder
    {
        return new ResourceOperationsRequestBuilder($this->client, $this->requestUrl . '/resourceOperations');
    }
    /**
     * Navigate to roleAssignments
     *
     * @return RoleAssignmentsRequestBuilder
     */
    public function roleAssignments(): RoleAssignmentsRequestBuilder
    {
        return new RoleAssignmentsRequestBuilder($this->client, $this->requestUrl . '/roleAssignments');
    }
    /**
     * Navigate to roleDefinitions
     *
     * @return RoleDefinitionsRequestBuilder
     */
    public function roleDefinitions(): RoleDefinitionsRequestBuilder
    {
        return new RoleDefinitionsRequestBuilder($this->client, $this->requestUrl . '/roleDefinitions');
    }
    /**
     * Navigate to softwareUpdateStatusSummary
     *
     * @return SoftwareUpdateStatusSummaryRequestBuilder
     */
    public function softwareUpdateStatusSummary(): SoftwareUpdateStatusSummaryRequestBuilder
    {
        return new SoftwareUpdateStatusSummaryRequestBuilder($this->client, $this->requestUrl . '/softwareUpdateStatusSummary');
    }
    /**
     * Navigate to telecomExpenseManagementPartners
     *
     * @return TelecomExpenseManagementPartnersRequestBuilder
     */
    public function telecomExpenseManagementPartners(): TelecomExpenseManagementPartnersRequestBuilder
    {
        return new TelecomExpenseManagementPartnersRequestBuilder($this->client, $this->requestUrl . '/telecomExpenseManagementPartners');
    }
    /**
     * Navigate to termsAndConditions
     *
     * @return TermsAndConditionsRequestBuilder
     */
    public function termsAndConditions(): TermsAndConditionsRequestBuilder
    {
        return new TermsAndConditionsRequestBuilder($this->client, $this->requestUrl . '/termsAndConditions');
    }
    /**
     * Navigate to troubleshootingEvents
     *
     * @return TroubleshootingEventsRequestBuilder
     */
    public function troubleshootingEvents(): TroubleshootingEventsRequestBuilder
    {
        return new TroubleshootingEventsRequestBuilder($this->client, $this->requestUrl . '/troubleshootingEvents');
    }
    /**
     * Navigate to userExperienceAnalyticsAppHealthApplicationPerformance
     *
     * @return UserExperienceAnalyticsAppHealthApplicationPerformanceRequestBuilder
     */
    public function userExperienceAnalyticsAppHealthApplicationPerformance(): UserExperienceAnalyticsAppHealthApplicationPerformanceRequestBuilder
    {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsAppHealthApplicationPerformance');
    }
    /**
     * Navigate to userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails
     *
     * @return UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetailsRequestBuilder
     */
    public function userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails(): UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetailsRequestBuilder
    {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetailsRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails');
    }
    /**
     * Navigate to userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId
     *
     * @return UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceIdRequestBuilder
     */
    public function userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId(): UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceIdRequestBuilder
    {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceIdRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId');
    }
    /**
     * Navigate to userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion
     *
     * @return UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder
     */
    public function userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion(): UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder
    {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion');
    }
    /**
     * Navigate to userExperienceAnalyticsAppHealthDeviceModelPerformance
     *
     * @return UserExperienceAnalyticsAppHealthDeviceModelPerformanceRequestBuilder
     */
    public function userExperienceAnalyticsAppHealthDeviceModelPerformance(): UserExperienceAnalyticsAppHealthDeviceModelPerformanceRequestBuilder
    {
        return new UserExperienceAnalyticsAppHealthDeviceModelPerformanceRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsAppHealthDeviceModelPerformance');
    }
    /**
     * Navigate to userExperienceAnalyticsAppHealthDevicePerformance
     *
     * @return UserExperienceAnalyticsAppHealthDevicePerformanceRequestBuilder
     */
    public function userExperienceAnalyticsAppHealthDevicePerformance(): UserExperienceAnalyticsAppHealthDevicePerformanceRequestBuilder
    {
        return new UserExperienceAnalyticsAppHealthDevicePerformanceRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsAppHealthDevicePerformance');
    }
    /**
     * Navigate to userExperienceAnalyticsAppHealthDevicePerformanceDetails
     *
     * @return UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder
     */
    public function userExperienceAnalyticsAppHealthDevicePerformanceDetails(): UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder
    {
        return new UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsAppHealthDevicePerformanceDetails');
    }
    /**
     * Navigate to userExperienceAnalyticsAppHealthOSVersionPerformance
     *
     * @return UserExperienceAnalyticsAppHealthOSVersionPerformanceRequestBuilder
     */
    public function userExperienceAnalyticsAppHealthOSVersionPerformance(): UserExperienceAnalyticsAppHealthOSVersionPerformanceRequestBuilder
    {
        return new UserExperienceAnalyticsAppHealthOSVersionPerformanceRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsAppHealthOSVersionPerformance');
    }
    /**
     * Navigate to userExperienceAnalyticsAppHealthOverview
     *
     * @return UserExperienceAnalyticsAppHealthOverviewRequestBuilder
     */
    public function userExperienceAnalyticsAppHealthOverview(): UserExperienceAnalyticsAppHealthOverviewRequestBuilder
    {
        return new UserExperienceAnalyticsAppHealthOverviewRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsAppHealthOverview');
    }
    /**
     * Navigate to userExperienceAnalyticsBaselines
     *
     * @return UserExperienceAnalyticsBaselinesRequestBuilder
     */
    public function userExperienceAnalyticsBaselines(): UserExperienceAnalyticsBaselinesRequestBuilder
    {
        return new UserExperienceAnalyticsBaselinesRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsBaselines');
    }
    /**
     * Navigate to userExperienceAnalyticsCategories
     *
     * @return UserExperienceAnalyticsCategoriesRequestBuilder
     */
    public function userExperienceAnalyticsCategories(): UserExperienceAnalyticsCategoriesRequestBuilder
    {
        return new UserExperienceAnalyticsCategoriesRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsCategories');
    }
    /**
     * Navigate to userExperienceAnalyticsDevicePerformance
     *
     * @return UserExperienceAnalyticsDevicePerformanceRequestBuilder
     */
    public function userExperienceAnalyticsDevicePerformance(): UserExperienceAnalyticsDevicePerformanceRequestBuilder
    {
        return new UserExperienceAnalyticsDevicePerformanceRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsDevicePerformance');
    }
    /**
     * Navigate to userExperienceAnalyticsDeviceScores
     *
     * @return UserExperienceAnalyticsDeviceScoresRequestBuilder
     */
    public function userExperienceAnalyticsDeviceScores(): UserExperienceAnalyticsDeviceScoresRequestBuilder
    {
        return new UserExperienceAnalyticsDeviceScoresRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsDeviceScores');
    }
    /**
     * Navigate to userExperienceAnalyticsDeviceStartupHistory
     *
     * @return UserExperienceAnalyticsDeviceStartupHistoryRequestBuilder
     */
    public function userExperienceAnalyticsDeviceStartupHistory(): UserExperienceAnalyticsDeviceStartupHistoryRequestBuilder
    {
        return new UserExperienceAnalyticsDeviceStartupHistoryRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsDeviceStartupHistory');
    }
    /**
     * Navigate to userExperienceAnalyticsDeviceStartupProcesses
     *
     * @return UserExperienceAnalyticsDeviceStartupProcessesRequestBuilder
     */
    public function userExperienceAnalyticsDeviceStartupProcesses(): UserExperienceAnalyticsDeviceStartupProcessesRequestBuilder
    {
        return new UserExperienceAnalyticsDeviceStartupProcessesRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsDeviceStartupProcesses');
    }
    /**
     * Navigate to userExperienceAnalyticsDeviceStartupProcessPerformance
     *
     * @return UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder
     */
    public function userExperienceAnalyticsDeviceStartupProcessPerformance(): UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder
    {
        return new UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsDeviceStartupProcessPerformance');
    }
    /**
     * Navigate to userExperienceAnalyticsMetricHistory
     *
     * @return UserExperienceAnalyticsMetricHistoryRequestBuilder
     */
    public function userExperienceAnalyticsMetricHistory(): UserExperienceAnalyticsMetricHistoryRequestBuilder
    {
        return new UserExperienceAnalyticsMetricHistoryRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsMetricHistory');
    }
    /**
     * Navigate to userExperienceAnalyticsModelScores
     *
     * @return UserExperienceAnalyticsModelScoresRequestBuilder
     */
    public function userExperienceAnalyticsModelScores(): UserExperienceAnalyticsModelScoresRequestBuilder
    {
        return new UserExperienceAnalyticsModelScoresRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsModelScores');
    }
    /**
     * Navigate to userExperienceAnalyticsOverview
     *
     * @return UserExperienceAnalyticsOverviewRequestBuilder
     */
    public function userExperienceAnalyticsOverview(): UserExperienceAnalyticsOverviewRequestBuilder
    {
        return new UserExperienceAnalyticsOverviewRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsOverview');
    }
    /**
     * Navigate to userExperienceAnalyticsScoreHistory
     *
     * @return UserExperienceAnalyticsScoreHistoryRequestBuilder
     */
    public function userExperienceAnalyticsScoreHistory(): UserExperienceAnalyticsScoreHistoryRequestBuilder
    {
        return new UserExperienceAnalyticsScoreHistoryRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsScoreHistory');
    }
    /**
     * Navigate to userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
     *
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilder
     */
    public function userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric(): UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilder
    {
        return new UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric');
    }
    /**
     * Navigate to userExperienceAnalyticsWorkFromAnywhereMetrics
     *
     * @return UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder
     */
    public function userExperienceAnalyticsWorkFromAnywhereMetrics(): UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder
    {
        return new UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsWorkFromAnywhereMetrics');
    }
    /**
     * Navigate to userExperienceAnalyticsWorkFromAnywhereModelPerformance
     *
     * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder
     */
    public function userExperienceAnalyticsWorkFromAnywhereModelPerformance(): UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder
    {
        return new UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder($this->client, $this->requestUrl . '/userExperienceAnalyticsWorkFromAnywhereModelPerformance');
    }
    /**
     * Navigate to virtualEndpoint
     *
     * @return VirtualEndpointRequestBuilder
     */
    public function virtualEndpoint(): VirtualEndpointRequestBuilder
    {
        return new VirtualEndpointRequestBuilder($this->client, $this->requestUrl . '/virtualEndpoint');
    }
    /**
     * Navigate to windowsAutopilotDeviceIdentities
     *
     * @return WindowsAutopilotDeviceIdentitiesRequestBuilder
     */
    public function windowsAutopilotDeviceIdentities(): WindowsAutopilotDeviceIdentitiesRequestBuilder
    {
        return new WindowsAutopilotDeviceIdentitiesRequestBuilder($this->client, $this->requestUrl . '/windowsAutopilotDeviceIdentities');
    }
    /**
     * Navigate to windowsInformationProtectionAppLearningSummaries
     *
     * @return WindowsInformationProtectionAppLearningSummariesRequestBuilder
     */
    public function windowsInformationProtectionAppLearningSummaries(): WindowsInformationProtectionAppLearningSummariesRequestBuilder
    {
        return new WindowsInformationProtectionAppLearningSummariesRequestBuilder($this->client, $this->requestUrl . '/windowsInformationProtectionAppLearningSummaries');
    }
    /**
     * Navigate to windowsInformationProtectionNetworkLearningSummaries
     *
     * @return WindowsInformationProtectionNetworkLearningSummariesRequestBuilder
     */
    public function windowsInformationProtectionNetworkLearningSummaries(): WindowsInformationProtectionNetworkLearningSummariesRequestBuilder
    {
        return new WindowsInformationProtectionNetworkLearningSummariesRequestBuilder($this->client, $this->requestUrl . '/windowsInformationProtectionNetworkLearningSummaries');
    }
    /**
     * Navigate to windowsMalwareInformation
     *
     * @return WindowsMalwareInformationRequestBuilder
     */
    public function windowsMalwareInformation(): WindowsMalwareInformationRequestBuilder
    {
        return new WindowsMalwareInformationRequestBuilder($this->client, $this->requestUrl . '/windowsMalwareInformation');
    }
}
