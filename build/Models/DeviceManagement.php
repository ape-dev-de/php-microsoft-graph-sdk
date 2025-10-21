<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagement
 */
class DeviceManagement
{
    /**
     * Device protection overview.
     */
    private ?string $deviceProtectionOverview;

    /**
     * Intune Account Id for given tenant
     */
    private ?string $intuneAccountId;

    /**
     * intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     */
    private ?string $intuneBrand;

    /**
     * Account level settings.
     */
    private ?string $settings;

    /**
     */
    private ?string $subscriptionState;

    /**
     * User experience analytics device settings
     */
    private ?string $userExperienceAnalyticsSettings;

    /**
     * Malware overview for windows devices.
     */
    private ?string $windowsMalwareOverview;

    /**
     * Apple push notification certificate.
     */
    private ?string $applePushNotificationCertificate;

    /**
     * The Audit Events
     */
    private array $auditEvents = [];

    /**
     * The list of Compliance Management Partners configured by the tenant.
     */
    private array $complianceManagementPartners = [];

    /**
     * The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     */
    private ?string $conditionalAccessSettings;

    /**
     * The list of detected apps associated with a device.
     */
    private array $detectedApps = [];

    /**
     * The list of device categories with the tenant.
     */
    private array $deviceCategories = [];

    /**
     * The device compliance policies.
     */
    private array $deviceCompliancePolicies = [];

    /**
     * The device compliance state summary for this account.
     */
    private ?string $deviceCompliancePolicyDeviceStateSummary;

    /**
     * The summary states of compliance policy settings for this account.
     */
    private array $deviceCompliancePolicySettingStateSummaries = [];

    /**
     * The device configuration device state summary for this account.
     */
    private ?string $deviceConfigurationDeviceStateSummaries;

    /**
     * The device configurations.
     */
    private array $deviceConfigurations = [];

    /**
     * The list of device enrollment configurations
     */
    private array $deviceEnrollmentConfigurations = [];

    /**
     * The list of Device Management Partners configured by the tenant.
     */
    private array $deviceManagementPartners = [];

    /**
     * The list of Exchange Connectors configured by the tenant.
     */
    private array $exchangeConnectors = [];

    /**
     * Collection of imported Windows autopilot devices.
     */
    private array $importedWindowsAutopilotDeviceIdentities = [];

    /**
     * The IOS software update installation statuses for this account.
     */
    private array $iosUpdateStatuses = [];

    /**
     * Device overview
     */
    private ?string $managedDeviceOverview;

    /**
     * The list of managed devices.
     */
    private array $managedDevices = [];

    /**
     * The collection property of MobileAppTroubleshootingEvent.
     */
    private array $mobileAppTroubleshootingEvents = [];

    /**
     * The list of Mobile threat Defense connectors configured by the tenant.
     */
    private array $mobileThreatDefenseConnectors = [];

    /**
     * The Notification Message Templates.
     */
    private array $notificationMessageTemplates = [];

    /**
     * The remote assist partners.
     */
    private array $remoteAssistancePartners = [];

    /**
     * Reports singleton
     */
    private ?string $reports;

    /**
     * The Resource Operations.
     */
    private array $resourceOperations = [];

    /**
     * The Role Assignments.
     */
    private array $roleAssignments = [];

    /**
     * The Role Definitions.
     */
    private array $roleDefinitions = [];

    /**
     * The software update status summary.
     */
    private ?string $softwareUpdateStatusSummary;

    /**
     * The telecom expense management partners.
     */
    private array $telecomExpenseManagementPartners = [];

    /**
     * The terms and conditions associated with device management of the company.
     */
    private array $termsAndConditions = [];

    /**
     * The list of troubleshooting events for the tenant.
     */
    private array $troubleshootingEvents = [];

    /**
     * User experience analytics appHealth Application Performance
     */
    private array $userExperienceAnalyticsAppHealthApplicationPerformance = [];

    /**
     * User experience analytics appHealth Application Performance by App Version details
     */
    private array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails = [];

    /**
     * User experience analytics appHealth Application Performance by App Version Device Id
     */
    private array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId = [];

    /**
     * User experience analytics appHealth Application Performance by OS Version
     */
    private array $userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion = [];

    /**
     * User experience analytics appHealth Model Performance
     */
    private array $userExperienceAnalyticsAppHealthDeviceModelPerformance = [];

    /**
     * User experience analytics appHealth Device Performance
     */
    private array $userExperienceAnalyticsAppHealthDevicePerformance = [];

    /**
     * User experience analytics device performance details
     */
    private array $userExperienceAnalyticsAppHealthDevicePerformanceDetails = [];

    /**
     * User experience analytics appHealth OS version Performance
     */
    private array $userExperienceAnalyticsAppHealthOSVersionPerformance = [];

    /**
     * User experience analytics appHealth overview
     */
    private ?string $userExperienceAnalyticsAppHealthOverview;

    /**
     * User experience analytics baselines
     */
    private array $userExperienceAnalyticsBaselines = [];

    /**
     * User experience analytics categories
     */
    private array $userExperienceAnalyticsCategories = [];

    /**
     * User experience analytics device performance
     */
    private array $userExperienceAnalyticsDevicePerformance = [];

    /**
     * User experience analytics device scores
     */
    private array $userExperienceAnalyticsDeviceScores = [];

    /**
     * User experience analytics device Startup History
     */
    private array $userExperienceAnalyticsDeviceStartupHistory = [];

    /**
     * User experience analytics device Startup Processes
     */
    private array $userExperienceAnalyticsDeviceStartupProcesses = [];

    /**
     * User experience analytics device Startup Process Performance
     */
    private array $userExperienceAnalyticsDeviceStartupProcessPerformance = [];

    /**
     * User experience analytics metric history
     */
    private array $userExperienceAnalyticsMetricHistory = [];

    /**
     * User experience analytics model scores
     */
    private array $userExperienceAnalyticsModelScores = [];

    /**
     * User experience analytics overview
     */
    private ?string $userExperienceAnalyticsOverview;

    /**
     * User experience analytics device Startup Score History
     */
    private array $userExperienceAnalyticsScoreHistory = [];

    /**
     * User experience analytics work from anywhere hardware readiness metrics.
     */
    private ?string $userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric;

    /**
     * User experience analytics work from anywhere metrics.
     */
    private array $userExperienceAnalyticsWorkFromAnywhereMetrics = [];

    /**
     * The user experience analytics work from anywhere model performance
     */
    private array $userExperienceAnalyticsWorkFromAnywhereModelPerformance = [];

    /**
     * Virtual endpoint
     */
    private ?string $virtualEndpoint;

    /**
     * The Windows autopilot device identities contained collection.
     */
    private array $windowsAutopilotDeviceIdentities = [];

    /**
     * The windows information protection app learning summaries.
     */
    private array $windowsInformationProtectionAppLearningSummaries = [];

    /**
     * The windows information protection network learning summaries.
     */
    private array $windowsInformationProtectionNetworkLearningSummaries = [];

    /**
     * The list of affected malware in the tenant.
     * @var string[]
     */
    private array $windowsMalwareInformation = [];


    public function getDeviceProtectionOverview(): ?string
    {
        return $this->deviceProtectionOverview;
    }

    public function setDeviceProtectionOverview(?string $deviceProtectionOverview): self
    {
        $this->deviceProtectionOverview = $deviceProtectionOverview;
        return $this;
    }

    public function getIntuneAccountId(): ?string
    {
        return $this->intuneAccountId;
    }

    public function setIntuneAccountId(?string $intuneAccountId): self
    {
        $this->intuneAccountId = $intuneAccountId;
        return $this;
    }

    public function getIntuneBrand(): ?string
    {
        return $this->intuneBrand;
    }

    public function setIntuneBrand(?string $intuneBrand): self
    {
        $this->intuneBrand = $intuneBrand;
        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

    public function getSubscriptionState(): ?string
    {
        return $this->subscriptionState;
    }

    public function setSubscriptionState(?string $subscriptionState): self
    {
        $this->subscriptionState = $subscriptionState;
        return $this;
    }

    public function getUserExperienceAnalyticsSettings(): ?string
    {
        return $this->userExperienceAnalyticsSettings;
    }

    public function setUserExperienceAnalyticsSettings(?string $userExperienceAnalyticsSettings): self
    {
        $this->userExperienceAnalyticsSettings = $userExperienceAnalyticsSettings;
        return $this;
    }

    public function getWindowsMalwareOverview(): ?string
    {
        return $this->windowsMalwareOverview;
    }

    public function setWindowsMalwareOverview(?string $windowsMalwareOverview): self
    {
        $this->windowsMalwareOverview = $windowsMalwareOverview;
        return $this;
    }

    public function getApplePushNotificationCertificate(): ?string
    {
        return $this->applePushNotificationCertificate;
    }

    public function setApplePushNotificationCertificate(?string $applePushNotificationCertificate): self
    {
        $this->applePushNotificationCertificate = $applePushNotificationCertificate;
        return $this;
    }

    public function getAuditEvents(): array
    {
        return $this->auditEvents;
    }

    public function setAuditEvents(array $auditEvents): self
    {
        $this->auditEvents = $auditEvents;
        return $this;
    }

    public function getComplianceManagementPartners(): array
    {
        return $this->complianceManagementPartners;
    }

    public function setComplianceManagementPartners(array $complianceManagementPartners): self
    {
        $this->complianceManagementPartners = $complianceManagementPartners;
        return $this;
    }

    public function getConditionalAccessSettings(): ?string
    {
        return $this->conditionalAccessSettings;
    }

    public function setConditionalAccessSettings(?string $conditionalAccessSettings): self
    {
        $this->conditionalAccessSettings = $conditionalAccessSettings;
        return $this;
    }

    public function getDetectedApps(): array
    {
        return $this->detectedApps;
    }

    public function setDetectedApps(array $detectedApps): self
    {
        $this->detectedApps = $detectedApps;
        return $this;
    }

    public function getDeviceCategories(): array
    {
        return $this->deviceCategories;
    }

    public function setDeviceCategories(array $deviceCategories): self
    {
        $this->deviceCategories = $deviceCategories;
        return $this;
    }

    public function getDeviceCompliancePolicies(): array
    {
        return $this->deviceCompliancePolicies;
    }

    public function setDeviceCompliancePolicies(array $deviceCompliancePolicies): self
    {
        $this->deviceCompliancePolicies = $deviceCompliancePolicies;
        return $this;
    }

    public function getDeviceCompliancePolicyDeviceStateSummary(): ?string
    {
        return $this->deviceCompliancePolicyDeviceStateSummary;
    }

    public function setDeviceCompliancePolicyDeviceStateSummary(?string $deviceCompliancePolicyDeviceStateSummary): self
    {
        $this->deviceCompliancePolicyDeviceStateSummary = $deviceCompliancePolicyDeviceStateSummary;
        return $this;
    }

    public function getDeviceCompliancePolicySettingStateSummaries(): array
    {
        return $this->deviceCompliancePolicySettingStateSummaries;
    }

    public function setDeviceCompliancePolicySettingStateSummaries(array $deviceCompliancePolicySettingStateSummaries): self
    {
        $this->deviceCompliancePolicySettingStateSummaries = $deviceCompliancePolicySettingStateSummaries;
        return $this;
    }

    public function getDeviceConfigurationDeviceStateSummaries(): ?string
    {
        return $this->deviceConfigurationDeviceStateSummaries;
    }

    public function setDeviceConfigurationDeviceStateSummaries(?string $deviceConfigurationDeviceStateSummaries): self
    {
        $this->deviceConfigurationDeviceStateSummaries = $deviceConfigurationDeviceStateSummaries;
        return $this;
    }

    public function getDeviceConfigurations(): array
    {
        return $this->deviceConfigurations;
    }

    public function setDeviceConfigurations(array $deviceConfigurations): self
    {
        $this->deviceConfigurations = $deviceConfigurations;
        return $this;
    }

    public function getDeviceEnrollmentConfigurations(): array
    {
        return $this->deviceEnrollmentConfigurations;
    }

    public function setDeviceEnrollmentConfigurations(array $deviceEnrollmentConfigurations): self
    {
        $this->deviceEnrollmentConfigurations = $deviceEnrollmentConfigurations;
        return $this;
    }

    public function getDeviceManagementPartners(): array
    {
        return $this->deviceManagementPartners;
    }

    public function setDeviceManagementPartners(array $deviceManagementPartners): self
    {
        $this->deviceManagementPartners = $deviceManagementPartners;
        return $this;
    }

    public function getExchangeConnectors(): array
    {
        return $this->exchangeConnectors;
    }

    public function setExchangeConnectors(array $exchangeConnectors): self
    {
        $this->exchangeConnectors = $exchangeConnectors;
        return $this;
    }

    public function getImportedWindowsAutopilotDeviceIdentities(): array
    {
        return $this->importedWindowsAutopilotDeviceIdentities;
    }

    public function setImportedWindowsAutopilotDeviceIdentities(array $importedWindowsAutopilotDeviceIdentities): self
    {
        $this->importedWindowsAutopilotDeviceIdentities = $importedWindowsAutopilotDeviceIdentities;
        return $this;
    }

    public function getIosUpdateStatuses(): array
    {
        return $this->iosUpdateStatuses;
    }

    public function setIosUpdateStatuses(array $iosUpdateStatuses): self
    {
        $this->iosUpdateStatuses = $iosUpdateStatuses;
        return $this;
    }

    public function getManagedDeviceOverview(): ?string
    {
        return $this->managedDeviceOverview;
    }

    public function setManagedDeviceOverview(?string $managedDeviceOverview): self
    {
        $this->managedDeviceOverview = $managedDeviceOverview;
        return $this;
    }

    public function getManagedDevices(): array
    {
        return $this->managedDevices;
    }

    public function setManagedDevices(array $managedDevices): self
    {
        $this->managedDevices = $managedDevices;
        return $this;
    }

    public function getMobileAppTroubleshootingEvents(): array
    {
        return $this->mobileAppTroubleshootingEvents;
    }

    public function setMobileAppTroubleshootingEvents(array $mobileAppTroubleshootingEvents): self
    {
        $this->mobileAppTroubleshootingEvents = $mobileAppTroubleshootingEvents;
        return $this;
    }

    public function getMobileThreatDefenseConnectors(): array
    {
        return $this->mobileThreatDefenseConnectors;
    }

    public function setMobileThreatDefenseConnectors(array $mobileThreatDefenseConnectors): self
    {
        $this->mobileThreatDefenseConnectors = $mobileThreatDefenseConnectors;
        return $this;
    }

    public function getNotificationMessageTemplates(): array
    {
        return $this->notificationMessageTemplates;
    }

    public function setNotificationMessageTemplates(array $notificationMessageTemplates): self
    {
        $this->notificationMessageTemplates = $notificationMessageTemplates;
        return $this;
    }

    public function getRemoteAssistancePartners(): array
    {
        return $this->remoteAssistancePartners;
    }

    public function setRemoteAssistancePartners(array $remoteAssistancePartners): self
    {
        $this->remoteAssistancePartners = $remoteAssistancePartners;
        return $this;
    }

    public function getReports(): ?string
    {
        return $this->reports;
    }

    public function setReports(?string $reports): self
    {
        $this->reports = $reports;
        return $this;
    }

    public function getResourceOperations(): array
    {
        return $this->resourceOperations;
    }

    public function setResourceOperations(array $resourceOperations): self
    {
        $this->resourceOperations = $resourceOperations;
        return $this;
    }

    public function getRoleAssignments(): array
    {
        return $this->roleAssignments;
    }

    public function setRoleAssignments(array $roleAssignments): self
    {
        $this->roleAssignments = $roleAssignments;
        return $this;
    }

    public function getRoleDefinitions(): array
    {
        return $this->roleDefinitions;
    }

    public function setRoleDefinitions(array $roleDefinitions): self
    {
        $this->roleDefinitions = $roleDefinitions;
        return $this;
    }

    public function getSoftwareUpdateStatusSummary(): ?string
    {
        return $this->softwareUpdateStatusSummary;
    }

    public function setSoftwareUpdateStatusSummary(?string $softwareUpdateStatusSummary): self
    {
        $this->softwareUpdateStatusSummary = $softwareUpdateStatusSummary;
        return $this;
    }

    public function getTelecomExpenseManagementPartners(): array
    {
        return $this->telecomExpenseManagementPartners;
    }

    public function setTelecomExpenseManagementPartners(array $telecomExpenseManagementPartners): self
    {
        $this->telecomExpenseManagementPartners = $telecomExpenseManagementPartners;
        return $this;
    }

    public function getTermsAndConditions(): array
    {
        return $this->termsAndConditions;
    }

    public function setTermsAndConditions(array $termsAndConditions): self
    {
        $this->termsAndConditions = $termsAndConditions;
        return $this;
    }

    public function getTroubleshootingEvents(): array
    {
        return $this->troubleshootingEvents;
    }

    public function setTroubleshootingEvents(array $troubleshootingEvents): self
    {
        $this->troubleshootingEvents = $troubleshootingEvents;
        return $this;
    }

    public function getUserExperienceAnalyticsAppHealthApplicationPerformance(): array
    {
        return $this->userExperienceAnalyticsAppHealthApplicationPerformance;
    }

    public function setUserExperienceAnalyticsAppHealthApplicationPerformance(array $userExperienceAnalyticsAppHealthApplicationPerformance): self
    {
        $this->userExperienceAnalyticsAppHealthApplicationPerformance = $userExperienceAnalyticsAppHealthApplicationPerformance;
        return $this;
    }

    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails(): array
    {
        return $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails;
    }

    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails(array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails): self
    {
        $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails = $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails;
        return $this;
    }

    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId(): array
    {
        return $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId;
    }

    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId(array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId): self
    {
        $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId = $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId;
        return $this;
    }

    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion(): array
    {
        return $this->userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion;
    }

    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion(array $userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion): self
    {
        $this->userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion = $userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion;
        return $this;
    }

    public function getUserExperienceAnalyticsAppHealthDeviceModelPerformance(): array
    {
        return $this->userExperienceAnalyticsAppHealthDeviceModelPerformance;
    }

    public function setUserExperienceAnalyticsAppHealthDeviceModelPerformance(array $userExperienceAnalyticsAppHealthDeviceModelPerformance): self
    {
        $this->userExperienceAnalyticsAppHealthDeviceModelPerformance = $userExperienceAnalyticsAppHealthDeviceModelPerformance;
        return $this;
    }

    public function getUserExperienceAnalyticsAppHealthDevicePerformance(): array
    {
        return $this->userExperienceAnalyticsAppHealthDevicePerformance;
    }

    public function setUserExperienceAnalyticsAppHealthDevicePerformance(array $userExperienceAnalyticsAppHealthDevicePerformance): self
    {
        $this->userExperienceAnalyticsAppHealthDevicePerformance = $userExperienceAnalyticsAppHealthDevicePerformance;
        return $this;
    }

    public function getUserExperienceAnalyticsAppHealthDevicePerformanceDetails(): array
    {
        return $this->userExperienceAnalyticsAppHealthDevicePerformanceDetails;
    }

    public function setUserExperienceAnalyticsAppHealthDevicePerformanceDetails(array $userExperienceAnalyticsAppHealthDevicePerformanceDetails): self
    {
        $this->userExperienceAnalyticsAppHealthDevicePerformanceDetails = $userExperienceAnalyticsAppHealthDevicePerformanceDetails;
        return $this;
    }

    public function getUserExperienceAnalyticsAppHealthOSVersionPerformance(): array
    {
        return $this->userExperienceAnalyticsAppHealthOSVersionPerformance;
    }

    public function setUserExperienceAnalyticsAppHealthOSVersionPerformance(array $userExperienceAnalyticsAppHealthOSVersionPerformance): self
    {
        $this->userExperienceAnalyticsAppHealthOSVersionPerformance = $userExperienceAnalyticsAppHealthOSVersionPerformance;
        return $this;
    }

    public function getUserExperienceAnalyticsAppHealthOverview(): ?string
    {
        return $this->userExperienceAnalyticsAppHealthOverview;
    }

    public function setUserExperienceAnalyticsAppHealthOverview(?string $userExperienceAnalyticsAppHealthOverview): self
    {
        $this->userExperienceAnalyticsAppHealthOverview = $userExperienceAnalyticsAppHealthOverview;
        return $this;
    }

    public function getUserExperienceAnalyticsBaselines(): array
    {
        return $this->userExperienceAnalyticsBaselines;
    }

    public function setUserExperienceAnalyticsBaselines(array $userExperienceAnalyticsBaselines): self
    {
        $this->userExperienceAnalyticsBaselines = $userExperienceAnalyticsBaselines;
        return $this;
    }

    public function getUserExperienceAnalyticsCategories(): array
    {
        return $this->userExperienceAnalyticsCategories;
    }

    public function setUserExperienceAnalyticsCategories(array $userExperienceAnalyticsCategories): self
    {
        $this->userExperienceAnalyticsCategories = $userExperienceAnalyticsCategories;
        return $this;
    }

    public function getUserExperienceAnalyticsDevicePerformance(): array
    {
        return $this->userExperienceAnalyticsDevicePerformance;
    }

    public function setUserExperienceAnalyticsDevicePerformance(array $userExperienceAnalyticsDevicePerformance): self
    {
        $this->userExperienceAnalyticsDevicePerformance = $userExperienceAnalyticsDevicePerformance;
        return $this;
    }

    public function getUserExperienceAnalyticsDeviceScores(): array
    {
        return $this->userExperienceAnalyticsDeviceScores;
    }

    public function setUserExperienceAnalyticsDeviceScores(array $userExperienceAnalyticsDeviceScores): self
    {
        $this->userExperienceAnalyticsDeviceScores = $userExperienceAnalyticsDeviceScores;
        return $this;
    }

    public function getUserExperienceAnalyticsDeviceStartupHistory(): array
    {
        return $this->userExperienceAnalyticsDeviceStartupHistory;
    }

    public function setUserExperienceAnalyticsDeviceStartupHistory(array $userExperienceAnalyticsDeviceStartupHistory): self
    {
        $this->userExperienceAnalyticsDeviceStartupHistory = $userExperienceAnalyticsDeviceStartupHistory;
        return $this;
    }

    public function getUserExperienceAnalyticsDeviceStartupProcesses(): array
    {
        return $this->userExperienceAnalyticsDeviceStartupProcesses;
    }

    public function setUserExperienceAnalyticsDeviceStartupProcesses(array $userExperienceAnalyticsDeviceStartupProcesses): self
    {
        $this->userExperienceAnalyticsDeviceStartupProcesses = $userExperienceAnalyticsDeviceStartupProcesses;
        return $this;
    }

    public function getUserExperienceAnalyticsDeviceStartupProcessPerformance(): array
    {
        return $this->userExperienceAnalyticsDeviceStartupProcessPerformance;
    }

    public function setUserExperienceAnalyticsDeviceStartupProcessPerformance(array $userExperienceAnalyticsDeviceStartupProcessPerformance): self
    {
        $this->userExperienceAnalyticsDeviceStartupProcessPerformance = $userExperienceAnalyticsDeviceStartupProcessPerformance;
        return $this;
    }

    public function getUserExperienceAnalyticsMetricHistory(): array
    {
        return $this->userExperienceAnalyticsMetricHistory;
    }

    public function setUserExperienceAnalyticsMetricHistory(array $userExperienceAnalyticsMetricHistory): self
    {
        $this->userExperienceAnalyticsMetricHistory = $userExperienceAnalyticsMetricHistory;
        return $this;
    }

    public function getUserExperienceAnalyticsModelScores(): array
    {
        return $this->userExperienceAnalyticsModelScores;
    }

    public function setUserExperienceAnalyticsModelScores(array $userExperienceAnalyticsModelScores): self
    {
        $this->userExperienceAnalyticsModelScores = $userExperienceAnalyticsModelScores;
        return $this;
    }

    public function getUserExperienceAnalyticsOverview(): ?string
    {
        return $this->userExperienceAnalyticsOverview;
    }

    public function setUserExperienceAnalyticsOverview(?string $userExperienceAnalyticsOverview): self
    {
        $this->userExperienceAnalyticsOverview = $userExperienceAnalyticsOverview;
        return $this;
    }

    public function getUserExperienceAnalyticsScoreHistory(): array
    {
        return $this->userExperienceAnalyticsScoreHistory;
    }

    public function setUserExperienceAnalyticsScoreHistory(array $userExperienceAnalyticsScoreHistory): self
    {
        $this->userExperienceAnalyticsScoreHistory = $userExperienceAnalyticsScoreHistory;
        return $this;
    }

    public function getUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric(): ?string
    {
        return $this->userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric;
    }

    public function setUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric(?string $userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric): self
    {
        $this->userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric = $userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric;
        return $this;
    }

    public function getUserExperienceAnalyticsWorkFromAnywhereMetrics(): array
    {
        return $this->userExperienceAnalyticsWorkFromAnywhereMetrics;
    }

    public function setUserExperienceAnalyticsWorkFromAnywhereMetrics(array $userExperienceAnalyticsWorkFromAnywhereMetrics): self
    {
        $this->userExperienceAnalyticsWorkFromAnywhereMetrics = $userExperienceAnalyticsWorkFromAnywhereMetrics;
        return $this;
    }

    public function getUserExperienceAnalyticsWorkFromAnywhereModelPerformance(): array
    {
        return $this->userExperienceAnalyticsWorkFromAnywhereModelPerformance;
    }

    public function setUserExperienceAnalyticsWorkFromAnywhereModelPerformance(array $userExperienceAnalyticsWorkFromAnywhereModelPerformance): self
    {
        $this->userExperienceAnalyticsWorkFromAnywhereModelPerformance = $userExperienceAnalyticsWorkFromAnywhereModelPerformance;
        return $this;
    }

    public function getVirtualEndpoint(): ?string
    {
        return $this->virtualEndpoint;
    }

    public function setVirtualEndpoint(?string $virtualEndpoint): self
    {
        $this->virtualEndpoint = $virtualEndpoint;
        return $this;
    }

    public function getWindowsAutopilotDeviceIdentities(): array
    {
        return $this->windowsAutopilotDeviceIdentities;
    }

    public function setWindowsAutopilotDeviceIdentities(array $windowsAutopilotDeviceIdentities): self
    {
        $this->windowsAutopilotDeviceIdentities = $windowsAutopilotDeviceIdentities;
        return $this;
    }

    public function getWindowsInformationProtectionAppLearningSummaries(): array
    {
        return $this->windowsInformationProtectionAppLearningSummaries;
    }

    public function setWindowsInformationProtectionAppLearningSummaries(array $windowsInformationProtectionAppLearningSummaries): self
    {
        $this->windowsInformationProtectionAppLearningSummaries = $windowsInformationProtectionAppLearningSummaries;
        return $this;
    }

    public function getWindowsInformationProtectionNetworkLearningSummaries(): array
    {
        return $this->windowsInformationProtectionNetworkLearningSummaries;
    }

    public function setWindowsInformationProtectionNetworkLearningSummaries(array $windowsInformationProtectionNetworkLearningSummaries): self
    {
        $this->windowsInformationProtectionNetworkLearningSummaries = $windowsInformationProtectionNetworkLearningSummaries;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWindowsMalwareInformation(): array
    {
        return $this->windowsMalwareInformation;
    }

    /**
     * @param string[] $windowsMalwareInformation
     */
    public function setWindowsMalwareInformation(array $windowsMalwareInformation): self
    {
        $this->windowsMalwareInformation = $windowsMalwareInformation;
        return $this;
    }

}
