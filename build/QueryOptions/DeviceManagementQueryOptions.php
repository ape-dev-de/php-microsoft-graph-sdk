<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagement resources
 *
 * Available select fields:
 * - deviceProtectionOverview
 * - intuneAccountId
 * - intuneBrand
 * - settings
 * - subscriptionState
 * - userExperienceAnalyticsSettings
 * - windowsMalwareOverview
 * - applePushNotificationCertificate
 * - auditEvents
 * - complianceManagementPartners
 * - conditionalAccessSettings
 * - detectedApps
 * - deviceCategories
 * - deviceCompliancePolicies
 * - deviceCompliancePolicyDeviceStateSummary
 * - deviceCompliancePolicySettingStateSummaries
 * - deviceConfigurationDeviceStateSummaries
 * - deviceConfigurations
 * - deviceEnrollmentConfigurations
 * - deviceManagementPartners
 * - exchangeConnectors
 * - importedWindowsAutopilotDeviceIdentities
 * - iosUpdateStatuses
 * - managedDeviceOverview
 * - managedDevices
 * - mobileAppTroubleshootingEvents
 * - mobileThreatDefenseConnectors
 * - notificationMessageTemplates
 * - remoteAssistancePartners
 * - reports
 * - resourceOperations
 * - roleAssignments
 * - roleDefinitions
 * - softwareUpdateStatusSummary
 * - telecomExpenseManagementPartners
 * - termsAndConditions
 * - troubleshootingEvents
 * - userExperienceAnalyticsAppHealthApplicationPerformance
 * - userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails
 * - userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId
 * - userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion
 * - userExperienceAnalyticsAppHealthDeviceModelPerformance
 * - userExperienceAnalyticsAppHealthDevicePerformance
 * - userExperienceAnalyticsAppHealthDevicePerformanceDetails
 * - userExperienceAnalyticsAppHealthOSVersionPerformance
 * - userExperienceAnalyticsAppHealthOverview
 * - userExperienceAnalyticsBaselines
 * - userExperienceAnalyticsCategories
 * - userExperienceAnalyticsDevicePerformance
 * - userExperienceAnalyticsDeviceScores
 * - userExperienceAnalyticsDeviceStartupHistory
 * - userExperienceAnalyticsDeviceStartupProcesses
 * - userExperienceAnalyticsDeviceStartupProcessPerformance
 * - userExperienceAnalyticsMetricHistory
 * - userExperienceAnalyticsModelScores
 * - userExperienceAnalyticsOverview
 * - userExperienceAnalyticsScoreHistory
 * - userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
 * - userExperienceAnalyticsWorkFromAnywhereMetrics
 * - userExperienceAnalyticsWorkFromAnywhereModelPerformance
 * - virtualEndpoint
 * - windowsAutopilotDeviceIdentities
 * - windowsInformationProtectionAppLearningSummaries
 * - windowsInformationProtectionNetworkLearningSummaries
 * - windowsMalwareInformation
 */
class DeviceManagementQueryOptions extends QueryOptions
{
    public const FIELD_DEVICE_PROTECTION_OVERVIEW = 'deviceProtectionOverview';
    public const FIELD_INTUNE_ACCOUNT_ID = 'intuneAccountId';
    public const FIELD_INTUNE_BRAND = 'intuneBrand';
    public const FIELD_SETTINGS = 'settings';
    public const FIELD_SUBSCRIPTION_STATE = 'subscriptionState';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_SETTINGS = 'userExperienceAnalyticsSettings';
    public const FIELD_WINDOWS_MALWARE_OVERVIEW = 'windowsMalwareOverview';
    public const FIELD_APPLE_PUSH_NOTIFICATION_CERTIFICATE = 'applePushNotificationCertificate';
    public const FIELD_AUDIT_EVENTS = 'auditEvents';
    public const FIELD_COMPLIANCE_MANAGEMENT_PARTNERS = 'complianceManagementPartners';
    public const FIELD_CONDITIONAL_ACCESS_SETTINGS = 'conditionalAccessSettings';
    public const FIELD_DETECTED_APPS = 'detectedApps';
    public const FIELD_DEVICE_CATEGORIES = 'deviceCategories';
    public const FIELD_DEVICE_COMPLIANCE_POLICIES = 'deviceCompliancePolicies';
    public const FIELD_DEVICE_COMPLIANCE_POLICY_DEVICE_STATE_SUMMARY = 'deviceCompliancePolicyDeviceStateSummary';
    public const FIELD_DEVICE_COMPLIANCE_POLICY_SETTING_STATE_SUMMARIES = 'deviceCompliancePolicySettingStateSummaries';
    public const FIELD_DEVICE_CONFIGURATION_DEVICE_STATE_SUMMARIES = 'deviceConfigurationDeviceStateSummaries';
    public const FIELD_DEVICE_CONFIGURATIONS = 'deviceConfigurations';
    public const FIELD_DEVICE_ENROLLMENT_CONFIGURATIONS = 'deviceEnrollmentConfigurations';
    public const FIELD_DEVICE_MANAGEMENT_PARTNERS = 'deviceManagementPartners';
    public const FIELD_EXCHANGE_CONNECTORS = 'exchangeConnectors';
    public const FIELD_IMPORTED_WINDOWS_AUTOPILOT_DEVICE_IDENTITIES = 'importedWindowsAutopilotDeviceIdentities';
    public const FIELD_IOS_UPDATE_STATUSES = 'iosUpdateStatuses';
    public const FIELD_MANAGED_DEVICE_OVERVIEW = 'managedDeviceOverview';
    public const FIELD_MANAGED_DEVICES = 'managedDevices';
    public const FIELD_MOBILE_APP_TROUBLESHOOTING_EVENTS = 'mobileAppTroubleshootingEvents';
    public const FIELD_MOBILE_THREAT_DEFENSE_CONNECTORS = 'mobileThreatDefenseConnectors';
    public const FIELD_NOTIFICATION_MESSAGE_TEMPLATES = 'notificationMessageTemplates';
    public const FIELD_REMOTE_ASSISTANCE_PARTNERS = 'remoteAssistancePartners';
    public const FIELD_REPORTS = 'reports';
    public const FIELD_RESOURCE_OPERATIONS = 'resourceOperations';
    public const FIELD_ROLE_ASSIGNMENTS = 'roleAssignments';
    public const FIELD_ROLE_DEFINITIONS = 'roleDefinitions';
    public const FIELD_SOFTWARE_UPDATE_STATUS_SUMMARY = 'softwareUpdateStatusSummary';
    public const FIELD_TELECOM_EXPENSE_MANAGEMENT_PARTNERS = 'telecomExpenseManagementPartners';
    public const FIELD_TERMS_AND_CONDITIONS = 'termsAndConditions';
    public const FIELD_TROUBLESHOOTING_EVENTS = 'troubleshootingEvents';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_APP_HEALTH_APPLICATION_PERFORMANCE = 'userExperienceAnalyticsAppHealthApplicationPerformance';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_APP_HEALTH_APPLICATION_PERFORMANCE_BY_APP_VERSION_DETAILS = 'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_APP_HEALTH_APPLICATION_PERFORMANCE_BY_APP_VERSION_DEVICE_ID = 'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_APP_HEALTH_APPLICATION_PERFORMANCE_BY_OSVERSION = 'userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_APP_HEALTH_DEVICE_MODEL_PERFORMANCE = 'userExperienceAnalyticsAppHealthDeviceModelPerformance';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_APP_HEALTH_DEVICE_PERFORMANCE = 'userExperienceAnalyticsAppHealthDevicePerformance';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_APP_HEALTH_DEVICE_PERFORMANCE_DETAILS = 'userExperienceAnalyticsAppHealthDevicePerformanceDetails';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_APP_HEALTH_OSVERSION_PERFORMANCE = 'userExperienceAnalyticsAppHealthOSVersionPerformance';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_APP_HEALTH_OVERVIEW = 'userExperienceAnalyticsAppHealthOverview';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_BASELINES = 'userExperienceAnalyticsBaselines';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_CATEGORIES = 'userExperienceAnalyticsCategories';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_DEVICE_PERFORMANCE = 'userExperienceAnalyticsDevicePerformance';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_DEVICE_SCORES = 'userExperienceAnalyticsDeviceScores';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_DEVICE_STARTUP_HISTORY = 'userExperienceAnalyticsDeviceStartupHistory';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_DEVICE_STARTUP_PROCESSES = 'userExperienceAnalyticsDeviceStartupProcesses';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_DEVICE_STARTUP_PROCESS_PERFORMANCE = 'userExperienceAnalyticsDeviceStartupProcessPerformance';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_METRIC_HISTORY = 'userExperienceAnalyticsMetricHistory';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_MODEL_SCORES = 'userExperienceAnalyticsModelScores';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_OVERVIEW = 'userExperienceAnalyticsOverview';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_SCORE_HISTORY = 'userExperienceAnalyticsScoreHistory';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_WORK_FROM_ANYWHERE_HARDWARE_READINESS_METRIC = 'userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_WORK_FROM_ANYWHERE_METRICS = 'userExperienceAnalyticsWorkFromAnywhereMetrics';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_WORK_FROM_ANYWHERE_MODEL_PERFORMANCE = 'userExperienceAnalyticsWorkFromAnywhereModelPerformance';
    public const FIELD_VIRTUAL_ENDPOINT = 'virtualEndpoint';
    public const FIELD_WINDOWS_AUTOPILOT_DEVICE_IDENTITIES = 'windowsAutopilotDeviceIdentities';
    public const FIELD_WINDOWS_INFORMATION_PROTECTION_APP_LEARNING_SUMMARIES = 'windowsInformationProtectionAppLearningSummaries';
    public const FIELD_WINDOWS_INFORMATION_PROTECTION_NETWORK_LEARNING_SUMMARIES = 'windowsInformationProtectionNetworkLearningSummaries';
    public const FIELD_WINDOWS_MALWARE_INFORMATION = 'windowsMalwareInformation';

    /**
     * Select specific DeviceManagement properties
     * 
     * @param array<string> $select Use DeviceManagementQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
