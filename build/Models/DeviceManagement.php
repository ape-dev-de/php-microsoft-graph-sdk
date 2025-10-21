<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagement
 */
class DeviceManagement
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Device protection overview. */
        public ?string $deviceProtectionOverview = null,
        /** Intune Account Id for given tenant */
        public ?string $intuneAccountId = null,
        /** intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal. */
        public ?string $intuneBrand = null,
        /** Account level settings. */
        public ?string $settings = null,
        /**  */
        public ?string $subscriptionState = null,
        /** User experience analytics device settings */
        public ?string $userExperienceAnalyticsSettings = null,
        /** Malware overview for windows devices. */
        public ?string $windowsMalwareOverview = null,
        /** Apple push notification certificate. */
        public ?string $applePushNotificationCertificate = null,
        /** The Audit Events */
        public array $auditEvents = [],
        /** The list of Compliance Management Partners configured by the tenant. */
        public array $complianceManagementPartners = [],
        /** The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access */
        public ?string $conditionalAccessSettings = null,
        /** The list of detected apps associated with a device. */
        public array $detectedApps = [],
        /** The list of device categories with the tenant. */
        public array $deviceCategories = [],
        /** The device compliance policies. */
        public array $deviceCompliancePolicies = [],
        /** The device compliance state summary for this account. */
        public ?string $deviceCompliancePolicyDeviceStateSummary = null,
        /** The summary states of compliance policy settings for this account. */
        public array $deviceCompliancePolicySettingStateSummaries = [],
        /** The device configuration device state summary for this account. */
        public ?string $deviceConfigurationDeviceStateSummaries = null,
        /** The device configurations. */
        public array $deviceConfigurations = [],
        /** The list of device enrollment configurations */
        public array $deviceEnrollmentConfigurations = [],
        /** The list of Device Management Partners configured by the tenant. */
        public array $deviceManagementPartners = [],
        /** The list of Exchange Connectors configured by the tenant. */
        public array $exchangeConnectors = [],
        /** Collection of imported Windows autopilot devices. */
        public array $importedWindowsAutopilotDeviceIdentities = [],
        /** The IOS software update installation statuses for this account. */
        public array $iosUpdateStatuses = [],
        /** Device overview */
        public ?string $managedDeviceOverview = null,
        /** The list of managed devices. */
        public array $managedDevices = [],
        /** The collection property of MobileAppTroubleshootingEvent. */
        public array $mobileAppTroubleshootingEvents = [],
        /** The list of Mobile threat Defense connectors configured by the tenant. */
        public array $mobileThreatDefenseConnectors = [],
        /** The Notification Message Templates. */
        public array $notificationMessageTemplates = [],
        /** The remote assist partners. */
        public array $remoteAssistancePartners = [],
        /** Reports singleton */
        public ?string $reports = null,
        /** The Resource Operations. */
        public array $resourceOperations = [],
        /** The Role Assignments. */
        public array $roleAssignments = [],
        /** The Role Definitions. */
        public array $roleDefinitions = [],
        /** The software update status summary. */
        public ?string $softwareUpdateStatusSummary = null,
        /** The telecom expense management partners. */
        public array $telecomExpenseManagementPartners = [],
        /** The terms and conditions associated with device management of the company. */
        public array $termsAndConditions = [],
        /** The list of troubleshooting events for the tenant. */
        public array $troubleshootingEvents = [],
        /** User experience analytics appHealth Application Performance */
        public array $userExperienceAnalyticsAppHealthApplicationPerformance = [],
        /** User experience analytics appHealth Application Performance by App Version details */
        public array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails = [],
        /** User experience analytics appHealth Application Performance by App Version Device Id */
        public array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId = [],
        /** User experience analytics appHealth Application Performance by OS Version */
        public array $userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion = [],
        /** User experience analytics appHealth Model Performance */
        public array $userExperienceAnalyticsAppHealthDeviceModelPerformance = [],
        /** User experience analytics appHealth Device Performance */
        public array $userExperienceAnalyticsAppHealthDevicePerformance = [],
        /** User experience analytics device performance details */
        public array $userExperienceAnalyticsAppHealthDevicePerformanceDetails = [],
        /** User experience analytics appHealth OS version Performance */
        public array $userExperienceAnalyticsAppHealthOSVersionPerformance = [],
        /** User experience analytics appHealth overview */
        public ?string $userExperienceAnalyticsAppHealthOverview = null,
        /** User experience analytics baselines */
        public array $userExperienceAnalyticsBaselines = [],
        /** User experience analytics categories */
        public array $userExperienceAnalyticsCategories = [],
        /** User experience analytics device performance */
        public array $userExperienceAnalyticsDevicePerformance = [],
        /** User experience analytics device scores */
        public array $userExperienceAnalyticsDeviceScores = [],
        /** User experience analytics device Startup History */
        public array $userExperienceAnalyticsDeviceStartupHistory = [],
        /** User experience analytics device Startup Processes */
        public array $userExperienceAnalyticsDeviceStartupProcesses = [],
        /** User experience analytics device Startup Process Performance */
        public array $userExperienceAnalyticsDeviceStartupProcessPerformance = [],
        /** User experience analytics metric history */
        public array $userExperienceAnalyticsMetricHistory = [],
        /** User experience analytics model scores */
        public array $userExperienceAnalyticsModelScores = [],
        /** User experience analytics overview */
        public ?string $userExperienceAnalyticsOverview = null,
        /** User experience analytics device Startup Score History */
        public array $userExperienceAnalyticsScoreHistory = [],
        /** User experience analytics work from anywhere hardware readiness metrics. */
        public ?string $userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric = null,
        /** User experience analytics work from anywhere metrics. */
        public array $userExperienceAnalyticsWorkFromAnywhereMetrics = [],
        /** The user experience analytics work from anywhere model performance */
        public array $userExperienceAnalyticsWorkFromAnywhereModelPerformance = [],
        /** Virtual endpoint */
        public ?string $virtualEndpoint = null,
        /** The Windows autopilot device identities contained collection. */
        public array $windowsAutopilotDeviceIdentities = [],
        /** The windows information protection app learning summaries. */
        public array $windowsInformationProtectionAppLearningSummaries = [],
        /** The windows information protection network learning summaries. */
        public array $windowsInformationProtectionNetworkLearningSummaries = [],
        /** The list of affected malware in the tenant. */
        public array $windowsMalwareInformation = []
    ) {}
}
