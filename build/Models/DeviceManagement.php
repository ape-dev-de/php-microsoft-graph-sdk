<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagement
 */
class DeviceManagement
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Device protection overview.
     * @var DeviceProtectionOverview|\stdClass|null
     */
    public mixed $deviceProtectionOverview = null;

    /** Intune Account Id for given tenant */
    public ?string $intuneAccountId = null;

    /** 
     * intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     * @var IntuneBrand|\stdClass|null
     */
    public mixed $intuneBrand = null;

    /** 
     * Account level settings.
     * @var DeviceManagementSettings|\stdClass|null
     */
    public mixed $settings = null;

    /**  */
    public ?DeviceManagementSubscriptionState $subscriptionState = null;

    /** 
     * User experience analytics device settings
     * @var UserExperienceAnalyticsSettings|\stdClass|null
     */
    public mixed $userExperienceAnalyticsSettings = null;

    /** 
     * Malware overview for windows devices.
     * @var WindowsMalwareOverview|\stdClass|null
     */
    public mixed $windowsMalwareOverview = null;

    /** 
     * Apple push notification certificate.
     * @var ApplePushNotificationCertificate|\stdClass|null
     */
    public mixed $applePushNotificationCertificate = null;

    /** 
     * The Audit Events
     * @var AuditEvent[]
     */
    public array $auditEvents = [];

    /** 
     * The list of Compliance Management Partners configured by the tenant.
     * @var ComplianceManagementPartner[]
     */
    public array $complianceManagementPartners = [];

    /** 
     * The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     * @var OnPremisesConditionalAccessSettings|\stdClass|null
     */
    public mixed $conditionalAccessSettings = null;

    /** 
     * The list of detected apps associated with a device.
     * @var DetectedApp[]
     */
    public array $detectedApps = [];

    /** 
     * The list of device categories with the tenant.
     * @var DeviceCategory[]
     */
    public array $deviceCategories = [];

    /** 
     * The device compliance policies.
     * @var DeviceCompliancePolicy[]
     */
    public array $deviceCompliancePolicies = [];

    /** 
     * The device compliance state summary for this account.
     * @var DeviceCompliancePolicyDeviceStateSummary|\stdClass|null
     */
    public mixed $deviceCompliancePolicyDeviceStateSummary = null;

    /** 
     * The summary states of compliance policy settings for this account.
     * @var DeviceCompliancePolicySettingStateSummary[]
     */
    public array $deviceCompliancePolicySettingStateSummaries = [];

    /** 
     * The device configuration device state summary for this account.
     * @var DeviceConfigurationDeviceStateSummary|\stdClass|null
     */
    public mixed $deviceConfigurationDeviceStateSummaries = null;

    /** 
     * The device configurations.
     * @var DeviceConfiguration[]
     */
    public array $deviceConfigurations = [];

    /** 
     * The list of device enrollment configurations
     * @var DeviceEnrollmentConfiguration[]
     */
    public array $deviceEnrollmentConfigurations = [];

    /** 
     * The list of Device Management Partners configured by the tenant.
     * @var DeviceManagementPartner[]
     */
    public array $deviceManagementPartners = [];

    /** 
     * The list of Exchange Connectors configured by the tenant.
     * @var DeviceManagementExchangeConnector[]
     */
    public array $exchangeConnectors = [];

    /** 
     * Collection of imported Windows autopilot devices.
     * @var ImportedWindowsAutopilotDeviceIdentity[]
     */
    public array $importedWindowsAutopilotDeviceIdentities = [];

    /** 
     * The IOS software update installation statuses for this account.
     * @var IosUpdateDeviceStatus[]
     */
    public array $iosUpdateStatuses = [];

    /** 
     * Device overview
     * @var ManagedDeviceOverview|\stdClass|null
     */
    public mixed $managedDeviceOverview = null;

    /** 
     * The list of managed devices.
     * @var ManagedDevice[]
     */
    public array $managedDevices = [];

    /** 
     * The collection property of MobileAppTroubleshootingEvent.
     * @var MobileAppTroubleshootingEvent[]
     */
    public array $mobileAppTroubleshootingEvents = [];

    /** 
     * The list of Mobile threat Defense connectors configured by the tenant.
     * @var MobileThreatDefenseConnector[]
     */
    public array $mobileThreatDefenseConnectors = [];

    /** 
     * The Notification Message Templates.
     * @var NotificationMessageTemplate[]
     */
    public array $notificationMessageTemplates = [];

    /** 
     * The remote assist partners.
     * @var RemoteAssistancePartner[]
     */
    public array $remoteAssistancePartners = [];

    /** 
     * Reports singleton
     * @var DeviceManagementReports|\stdClass|null
     */
    public mixed $reports = null;

    /** 
     * The Resource Operations.
     * @var ResourceOperation[]
     */
    public array $resourceOperations = [];

    /** 
     * The Role Assignments.
     * @var DeviceAndAppManagementRoleAssignment[]
     */
    public array $roleAssignments = [];

    /** 
     * The Role Definitions.
     * @var RoleDefinition[]
     */
    public array $roleDefinitions = [];

    /** 
     * The software update status summary.
     * @var SoftwareUpdateStatusSummary|\stdClass|null
     */
    public mixed $softwareUpdateStatusSummary = null;

    /** 
     * The telecom expense management partners.
     * @var TelecomExpenseManagementPartner[]
     */
    public array $telecomExpenseManagementPartners = [];

    /** 
     * The terms and conditions associated with device management of the company.
     * @var TermsAndConditions[]
     */
    public array $termsAndConditions = [];

    /** 
     * The list of troubleshooting events for the tenant.
     * @var DeviceManagementTroubleshootingEvent[]
     */
    public array $troubleshootingEvents = [];

    /** 
     * User experience analytics appHealth Application Performance
     * @var UserExperienceAnalyticsAppHealthApplicationPerformance[]
     */
    public array $userExperienceAnalyticsAppHealthApplicationPerformance = [];

    /** 
     * User experience analytics appHealth Application Performance by App Version details
     * @var UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails[]
     */
    public array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails = [];

    /** 
     * User experience analytics appHealth Application Performance by App Version Device Id
     * @var UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId[]
     */
    public array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId = [];

    /** 
     * User experience analytics appHealth Application Performance by OS Version
     * @var UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion[]
     */
    public array $userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion = [];

    /** 
     * User experience analytics appHealth Model Performance
     * @var UserExperienceAnalyticsAppHealthDeviceModelPerformance[]
     */
    public array $userExperienceAnalyticsAppHealthDeviceModelPerformance = [];

    /** 
     * User experience analytics appHealth Device Performance
     * @var UserExperienceAnalyticsAppHealthDevicePerformance[]
     */
    public array $userExperienceAnalyticsAppHealthDevicePerformance = [];

    /** 
     * User experience analytics device performance details
     * @var UserExperienceAnalyticsAppHealthDevicePerformanceDetails[]
     */
    public array $userExperienceAnalyticsAppHealthDevicePerformanceDetails = [];

    /** 
     * User experience analytics appHealth OS version Performance
     * @var UserExperienceAnalyticsAppHealthOSVersionPerformance[]
     */
    public array $userExperienceAnalyticsAppHealthOSVersionPerformance = [];

    /** 
     * User experience analytics appHealth overview
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public mixed $userExperienceAnalyticsAppHealthOverview = null;

    /** 
     * User experience analytics baselines
     * @var UserExperienceAnalyticsBaseline[]
     */
    public array $userExperienceAnalyticsBaselines = [];

    /** 
     * User experience analytics categories
     * @var UserExperienceAnalyticsCategory[]
     */
    public array $userExperienceAnalyticsCategories = [];

    /** 
     * User experience analytics device performance
     * @var UserExperienceAnalyticsDevicePerformance[]
     */
    public array $userExperienceAnalyticsDevicePerformance = [];

    /** 
     * User experience analytics device scores
     * @var UserExperienceAnalyticsDeviceScores[]
     */
    public array $userExperienceAnalyticsDeviceScores = [];

    /** 
     * User experience analytics device Startup History
     * @var UserExperienceAnalyticsDeviceStartupHistory[]
     */
    public array $userExperienceAnalyticsDeviceStartupHistory = [];

    /** 
     * User experience analytics device Startup Processes
     * @var UserExperienceAnalyticsDeviceStartupProcess[]
     */
    public array $userExperienceAnalyticsDeviceStartupProcesses = [];

    /** 
     * User experience analytics device Startup Process Performance
     * @var UserExperienceAnalyticsDeviceStartupProcessPerformance[]
     */
    public array $userExperienceAnalyticsDeviceStartupProcessPerformance = [];

    /** 
     * User experience analytics metric history
     * @var UserExperienceAnalyticsMetricHistory[]
     */
    public array $userExperienceAnalyticsMetricHistory = [];

    /** 
     * User experience analytics model scores
     * @var UserExperienceAnalyticsModelScores[]
     */
    public array $userExperienceAnalyticsModelScores = [];

    /** 
     * User experience analytics overview
     * @var UserExperienceAnalyticsOverview|\stdClass|null
     */
    public mixed $userExperienceAnalyticsOverview = null;

    /** 
     * User experience analytics device Startup Score History
     * @var UserExperienceAnalyticsScoreHistory[]
     */
    public array $userExperienceAnalyticsScoreHistory = [];

    /** 
     * User experience analytics work from anywhere hardware readiness metrics.
     * @var UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric|\stdClass|null
     */
    public mixed $userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric = null;

    /** 
     * User experience analytics work from anywhere metrics.
     * @var UserExperienceAnalyticsWorkFromAnywhereMetric[]
     */
    public array $userExperienceAnalyticsWorkFromAnywhereMetrics = [];

    /** 
     * The user experience analytics work from anywhere model performance
     * @var UserExperienceAnalyticsWorkFromAnywhereModelPerformance[]
     */
    public array $userExperienceAnalyticsWorkFromAnywhereModelPerformance = [];

    /** 
     * Virtual endpoint
     * @var VirtualEndpoint|\stdClass|null
     */
    public mixed $virtualEndpoint = null;

    /** 
     * The Windows autopilot device identities contained collection.
     * @var WindowsAutopilotDeviceIdentity[]
     */
    public array $windowsAutopilotDeviceIdentities = [];

    /** 
     * The windows information protection app learning summaries.
     * @var WindowsInformationProtectionAppLearningSummary[]
     */
    public array $windowsInformationProtectionAppLearningSummaries = [];

    /** 
     * The windows information protection network learning summaries.
     * @var WindowsInformationProtectionNetworkLearningSummary[]
     */
    public array $windowsInformationProtectionNetworkLearningSummaries = [];

    /** 
     * The list of affected malware in the tenant.
     * @var WindowsMalwareInformation[]
     */
    public array $windowsMalwareInformation = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deviceProtectionOverview'])) {
            $this->deviceProtectionOverview = is_array($data['deviceProtectionOverview']) ? new DeviceProtectionOverview($data['deviceProtectionOverview']) : $data['deviceProtectionOverview'];
        }
        if (isset($data['intuneAccountId'])) {
            $this->intuneAccountId = $data['intuneAccountId'];
        }
        if (isset($data['intuneBrand'])) {
            $this->intuneBrand = is_array($data['intuneBrand']) ? new IntuneBrand($data['intuneBrand']) : $data['intuneBrand'];
        }
        if (isset($data['settings'])) {
            $this->settings = is_array($data['settings']) ? new DeviceManagementSettings($data['settings']) : $data['settings'];
        }
        if (isset($data['subscriptionState'])) {
            $this->subscriptionState = is_array($data['subscriptionState']) ? new DeviceManagementSubscriptionState($data['subscriptionState']) : $data['subscriptionState'];
        }
        if (isset($data['userExperienceAnalyticsSettings'])) {
            $this->userExperienceAnalyticsSettings = is_array($data['userExperienceAnalyticsSettings']) ? new UserExperienceAnalyticsSettings($data['userExperienceAnalyticsSettings']) : $data['userExperienceAnalyticsSettings'];
        }
        if (isset($data['windowsMalwareOverview'])) {
            $this->windowsMalwareOverview = is_array($data['windowsMalwareOverview']) ? new WindowsMalwareOverview($data['windowsMalwareOverview']) : $data['windowsMalwareOverview'];
        }
        if (isset($data['applePushNotificationCertificate'])) {
            $this->applePushNotificationCertificate = is_array($data['applePushNotificationCertificate']) ? new ApplePushNotificationCertificate($data['applePushNotificationCertificate']) : $data['applePushNotificationCertificate'];
        }
        if (isset($data['auditEvents'])) {
            $this->auditEvents = $data['auditEvents'];
        }
        if (isset($data['complianceManagementPartners'])) {
            $this->complianceManagementPartners = $data['complianceManagementPartners'];
        }
        if (isset($data['conditionalAccessSettings'])) {
            $this->conditionalAccessSettings = is_array($data['conditionalAccessSettings']) ? new OnPremisesConditionalAccessSettings($data['conditionalAccessSettings']) : $data['conditionalAccessSettings'];
        }
        if (isset($data['detectedApps'])) {
            $this->detectedApps = $data['detectedApps'];
        }
        if (isset($data['deviceCategories'])) {
            $this->deviceCategories = $data['deviceCategories'];
        }
        if (isset($data['deviceCompliancePolicies'])) {
            $this->deviceCompliancePolicies = $data['deviceCompliancePolicies'];
        }
        if (isset($data['deviceCompliancePolicyDeviceStateSummary'])) {
            $this->deviceCompliancePolicyDeviceStateSummary = is_array($data['deviceCompliancePolicyDeviceStateSummary']) ? new DeviceCompliancePolicyDeviceStateSummary($data['deviceCompliancePolicyDeviceStateSummary']) : $data['deviceCompliancePolicyDeviceStateSummary'];
        }
        if (isset($data['deviceCompliancePolicySettingStateSummaries'])) {
            $this->deviceCompliancePolicySettingStateSummaries = $data['deviceCompliancePolicySettingStateSummaries'];
        }
        if (isset($data['deviceConfigurationDeviceStateSummaries'])) {
            $this->deviceConfigurationDeviceStateSummaries = is_array($data['deviceConfigurationDeviceStateSummaries']) ? new DeviceConfigurationDeviceStateSummary($data['deviceConfigurationDeviceStateSummaries']) : $data['deviceConfigurationDeviceStateSummaries'];
        }
        if (isset($data['deviceConfigurations'])) {
            $this->deviceConfigurations = $data['deviceConfigurations'];
        }
        if (isset($data['deviceEnrollmentConfigurations'])) {
            $this->deviceEnrollmentConfigurations = $data['deviceEnrollmentConfigurations'];
        }
        if (isset($data['deviceManagementPartners'])) {
            $this->deviceManagementPartners = $data['deviceManagementPartners'];
        }
        if (isset($data['exchangeConnectors'])) {
            $this->exchangeConnectors = $data['exchangeConnectors'];
        }
        if (isset($data['importedWindowsAutopilotDeviceIdentities'])) {
            $this->importedWindowsAutopilotDeviceIdentities = $data['importedWindowsAutopilotDeviceIdentities'];
        }
        if (isset($data['iosUpdateStatuses'])) {
            $this->iosUpdateStatuses = $data['iosUpdateStatuses'];
        }
        if (isset($data['managedDeviceOverview'])) {
            $this->managedDeviceOverview = is_array($data['managedDeviceOverview']) ? new ManagedDeviceOverview($data['managedDeviceOverview']) : $data['managedDeviceOverview'];
        }
        if (isset($data['managedDevices'])) {
            $this->managedDevices = $data['managedDevices'];
        }
        if (isset($data['mobileAppTroubleshootingEvents'])) {
            $this->mobileAppTroubleshootingEvents = $data['mobileAppTroubleshootingEvents'];
        }
        if (isset($data['mobileThreatDefenseConnectors'])) {
            $this->mobileThreatDefenseConnectors = $data['mobileThreatDefenseConnectors'];
        }
        if (isset($data['notificationMessageTemplates'])) {
            $this->notificationMessageTemplates = $data['notificationMessageTemplates'];
        }
        if (isset($data['remoteAssistancePartners'])) {
            $this->remoteAssistancePartners = $data['remoteAssistancePartners'];
        }
        if (isset($data['reports'])) {
            $this->reports = is_array($data['reports']) ? new DeviceManagementReports($data['reports']) : $data['reports'];
        }
        if (isset($data['resourceOperations'])) {
            $this->resourceOperations = $data['resourceOperations'];
        }
        if (isset($data['roleAssignments'])) {
            $this->roleAssignments = $data['roleAssignments'];
        }
        if (isset($data['roleDefinitions'])) {
            $this->roleDefinitions = $data['roleDefinitions'];
        }
        if (isset($data['softwareUpdateStatusSummary'])) {
            $this->softwareUpdateStatusSummary = is_array($data['softwareUpdateStatusSummary']) ? new SoftwareUpdateStatusSummary($data['softwareUpdateStatusSummary']) : $data['softwareUpdateStatusSummary'];
        }
        if (isset($data['telecomExpenseManagementPartners'])) {
            $this->telecomExpenseManagementPartners = $data['telecomExpenseManagementPartners'];
        }
        if (isset($data['termsAndConditions'])) {
            $this->termsAndConditions = $data['termsAndConditions'];
        }
        if (isset($data['troubleshootingEvents'])) {
            $this->troubleshootingEvents = $data['troubleshootingEvents'];
        }
        if (isset($data['userExperienceAnalyticsAppHealthApplicationPerformance'])) {
            $this->userExperienceAnalyticsAppHealthApplicationPerformance = $data['userExperienceAnalyticsAppHealthApplicationPerformance'];
        }
        if (isset($data['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails'])) {
            $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails = $data['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails'];
        }
        if (isset($data['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId'])) {
            $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId = $data['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId'];
        }
        if (isset($data['userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion'])) {
            $this->userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion = $data['userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion'];
        }
        if (isset($data['userExperienceAnalyticsAppHealthDeviceModelPerformance'])) {
            $this->userExperienceAnalyticsAppHealthDeviceModelPerformance = $data['userExperienceAnalyticsAppHealthDeviceModelPerformance'];
        }
        if (isset($data['userExperienceAnalyticsAppHealthDevicePerformance'])) {
            $this->userExperienceAnalyticsAppHealthDevicePerformance = $data['userExperienceAnalyticsAppHealthDevicePerformance'];
        }
        if (isset($data['userExperienceAnalyticsAppHealthDevicePerformanceDetails'])) {
            $this->userExperienceAnalyticsAppHealthDevicePerformanceDetails = $data['userExperienceAnalyticsAppHealthDevicePerformanceDetails'];
        }
        if (isset($data['userExperienceAnalyticsAppHealthOSVersionPerformance'])) {
            $this->userExperienceAnalyticsAppHealthOSVersionPerformance = $data['userExperienceAnalyticsAppHealthOSVersionPerformance'];
        }
        if (isset($data['userExperienceAnalyticsAppHealthOverview'])) {
            $this->userExperienceAnalyticsAppHealthOverview = is_array($data['userExperienceAnalyticsAppHealthOverview']) ? new UserExperienceAnalyticsCategory($data['userExperienceAnalyticsAppHealthOverview']) : $data['userExperienceAnalyticsAppHealthOverview'];
        }
        if (isset($data['userExperienceAnalyticsBaselines'])) {
            $this->userExperienceAnalyticsBaselines = $data['userExperienceAnalyticsBaselines'];
        }
        if (isset($data['userExperienceAnalyticsCategories'])) {
            $this->userExperienceAnalyticsCategories = $data['userExperienceAnalyticsCategories'];
        }
        if (isset($data['userExperienceAnalyticsDevicePerformance'])) {
            $this->userExperienceAnalyticsDevicePerformance = $data['userExperienceAnalyticsDevicePerformance'];
        }
        if (isset($data['userExperienceAnalyticsDeviceScores'])) {
            $this->userExperienceAnalyticsDeviceScores = $data['userExperienceAnalyticsDeviceScores'];
        }
        if (isset($data['userExperienceAnalyticsDeviceStartupHistory'])) {
            $this->userExperienceAnalyticsDeviceStartupHistory = $data['userExperienceAnalyticsDeviceStartupHistory'];
        }
        if (isset($data['userExperienceAnalyticsDeviceStartupProcesses'])) {
            $this->userExperienceAnalyticsDeviceStartupProcesses = $data['userExperienceAnalyticsDeviceStartupProcesses'];
        }
        if (isset($data['userExperienceAnalyticsDeviceStartupProcessPerformance'])) {
            $this->userExperienceAnalyticsDeviceStartupProcessPerformance = $data['userExperienceAnalyticsDeviceStartupProcessPerformance'];
        }
        if (isset($data['userExperienceAnalyticsMetricHistory'])) {
            $this->userExperienceAnalyticsMetricHistory = $data['userExperienceAnalyticsMetricHistory'];
        }
        if (isset($data['userExperienceAnalyticsModelScores'])) {
            $this->userExperienceAnalyticsModelScores = $data['userExperienceAnalyticsModelScores'];
        }
        if (isset($data['userExperienceAnalyticsOverview'])) {
            $this->userExperienceAnalyticsOverview = is_array($data['userExperienceAnalyticsOverview']) ? new UserExperienceAnalyticsOverview($data['userExperienceAnalyticsOverview']) : $data['userExperienceAnalyticsOverview'];
        }
        if (isset($data['userExperienceAnalyticsScoreHistory'])) {
            $this->userExperienceAnalyticsScoreHistory = $data['userExperienceAnalyticsScoreHistory'];
        }
        if (isset($data['userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric'])) {
            $this->userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric = is_array($data['userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric']) ? new UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric($data['userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric']) : $data['userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric'];
        }
        if (isset($data['userExperienceAnalyticsWorkFromAnywhereMetrics'])) {
            $this->userExperienceAnalyticsWorkFromAnywhereMetrics = $data['userExperienceAnalyticsWorkFromAnywhereMetrics'];
        }
        if (isset($data['userExperienceAnalyticsWorkFromAnywhereModelPerformance'])) {
            $this->userExperienceAnalyticsWorkFromAnywhereModelPerformance = $data['userExperienceAnalyticsWorkFromAnywhereModelPerformance'];
        }
        if (isset($data['virtualEndpoint'])) {
            $this->virtualEndpoint = is_array($data['virtualEndpoint']) ? new VirtualEndpoint($data['virtualEndpoint']) : $data['virtualEndpoint'];
        }
        if (isset($data['windowsAutopilotDeviceIdentities'])) {
            $this->windowsAutopilotDeviceIdentities = $data['windowsAutopilotDeviceIdentities'];
        }
        if (isset($data['windowsInformationProtectionAppLearningSummaries'])) {
            $this->windowsInformationProtectionAppLearningSummaries = $data['windowsInformationProtectionAppLearningSummaries'];
        }
        if (isset($data['windowsInformationProtectionNetworkLearningSummaries'])) {
            $this->windowsInformationProtectionNetworkLearningSummaries = $data['windowsInformationProtectionNetworkLearningSummaries'];
        }
        if (isset($data['windowsMalwareInformation'])) {
            $this->windowsMalwareInformation = $data['windowsMalwareInformation'];
        }
    }
}
