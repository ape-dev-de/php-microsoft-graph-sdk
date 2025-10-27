<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidWorkProfileCompliancePolicy
 */
class AndroidWorkProfileCompliancePolicy
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** DateTime the object was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Admin provided description of the Device Configuration. */
    public ?string $description = null;

    /** Admin provided name of the device configuration. */
    public ?string $displayName = null;

    /** DateTime the object was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Version of the device configuration. */
    public ?float $version = null;

    /** 
     * The collection of assignments for this compliance policy.
     * @var DeviceCompliancePolicyAssignment[]
     */
    public array $assignments = [];

    /** 
     * Compliance Setting State Device Summary
     * @var SettingStateDeviceSummary[]
     */
    public array $deviceSettingStateSummaries = [];

    /** 
     * List of DeviceComplianceDeviceStatus.
     * @var DeviceComplianceDeviceStatus[]
     */
    public array $deviceStatuses = [];

    /** 
     * Device compliance devices status overview
     * @var DeviceComplianceDeviceOverview|\stdClass|null
     */
    public DeviceComplianceDeviceOverview|\stdClass|null $deviceStatusOverview = null;

    /** 
     * The list of scheduled action per rule for this compliance policy. This is a required property when creating any individual per-platform compliance policies.
     * @var DeviceComplianceScheduledActionForRule[]
     */
    public array $scheduledActionsForRule = [];

    /** 
     * List of DeviceComplianceUserStatus.
     * @var DeviceComplianceUserStatus[]
     */
    public array $userStatuses = [];

    /** 
     * Device compliance users status overview
     * @var DeviceComplianceUserOverview|\stdClass|null
     */
    public DeviceComplianceUserOverview|\stdClass|null $userStatusOverview = null;

    /** Require that devices have enabled device threat protection. */
    public ?bool $deviceThreatProtectionEnabled = null;

    /**  */
    public ?DeviceThreatProtectionLevel $deviceThreatProtectionRequiredSecurityLevel = null;

    /** Minimum Android security patch level. */
    public ?string $minAndroidSecurityPatchLevel = null;

    /** Maximum Android version. */
    public ?string $osMaximumVersion = null;

    /** Minimum Android version. */
    public ?string $osMinimumVersion = null;

    /** Number of days before the password expires. Valid values 1 to 365 */
    public ?float $passwordExpirationDays = null;

    /** Minimum password length. Valid values 4 to 16 */
    public ?float $passwordMinimumLength = null;

    /** Minutes of inactivity before a password is required. */
    public ?float $passwordMinutesOfInactivityBeforeLock = null;

    /** Number of previous passwords to block. Valid values 1 to 24 */
    public ?float $passwordPreviousPasswordBlockCount = null;

    /** Require a password to unlock device. */
    public ?bool $passwordRequired = null;

    /**  */
    public ?AndroidRequiredPasswordType $passwordRequiredType = null;

    /** Devices must not be jailbroken or rooted. */
    public ?bool $securityBlockJailbrokenDevices = null;

    /** Disable USB debugging on Android devices. */
    public ?bool $securityDisableUsbDebugging = null;

    /** Require that devices disallow installation of apps from unknown sources. */
    public ?bool $securityPreventInstallAppsFromUnknownSources = null;

    /** Require the device to pass the Company Portal client app runtime integrity check. */
    public ?bool $securityRequireCompanyPortalAppIntegrity = null;

    /** Require Google Play Services to be installed and enabled on the device. */
    public ?bool $securityRequireGooglePlayServices = null;

    /** Require the device to pass the SafetyNet basic integrity check. */
    public ?bool $securityRequireSafetyNetAttestationBasicIntegrity = null;

    /** Require the device to pass the SafetyNet certified device check. */
    public ?bool $securityRequireSafetyNetAttestationCertifiedDevice = null;

    /** Require the device to have up to date security providers. The device will require Google Play Services to be enabled and up to date. */
    public ?bool $securityRequireUpToDateSecurityProviders = null;

    /** Require the Android Verify apps feature is turned on. */
    public ?bool $securityRequireVerifyApps = null;

    /** Require encryption on Android devices. */
    public ?bool $storageRequireEncryption = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['version'])) {
            $this->version = is_numeric($data['version']) ? (float)$data['version'] : $data['version'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['deviceSettingStateSummaries'])) {
            $this->deviceSettingStateSummaries = $data['deviceSettingStateSummaries'];
        }
        if (isset($data['deviceStatuses'])) {
            $this->deviceStatuses = $data['deviceStatuses'];
        }
        if (isset($data['deviceStatusOverview'])) {
            $this->deviceStatusOverview = is_array($data['deviceStatusOverview']) ? new DeviceComplianceDeviceOverview($data['deviceStatusOverview']) : $data['deviceStatusOverview'];
        }
        if (isset($data['scheduledActionsForRule'])) {
            $this->scheduledActionsForRule = $data['scheduledActionsForRule'];
        }
        if (isset($data['userStatuses'])) {
            $this->userStatuses = $data['userStatuses'];
        }
        if (isset($data['userStatusOverview'])) {
            $this->userStatusOverview = is_array($data['userStatusOverview']) ? new DeviceComplianceUserOverview($data['userStatusOverview']) : $data['userStatusOverview'];
        }
        if (isset($data['deviceThreatProtectionEnabled'])) {
            $this->deviceThreatProtectionEnabled = is_bool($data['deviceThreatProtectionEnabled']) ? $data['deviceThreatProtectionEnabled'] : (bool)$data['deviceThreatProtectionEnabled'];
        }
        if (isset($data['deviceThreatProtectionRequiredSecurityLevel'])) {
            $this->deviceThreatProtectionRequiredSecurityLevel = is_string($data['deviceThreatProtectionRequiredSecurityLevel']) ? DeviceThreatProtectionLevel::tryFrom($data['deviceThreatProtectionRequiredSecurityLevel']) : $data['deviceThreatProtectionRequiredSecurityLevel'];
        }
        if (isset($data['minAndroidSecurityPatchLevel'])) {
            $this->minAndroidSecurityPatchLevel = $data['minAndroidSecurityPatchLevel'];
        }
        if (isset($data['osMaximumVersion'])) {
            $this->osMaximumVersion = $data['osMaximumVersion'];
        }
        if (isset($data['osMinimumVersion'])) {
            $this->osMinimumVersion = $data['osMinimumVersion'];
        }
        if (isset($data['passwordExpirationDays'])) {
            $this->passwordExpirationDays = is_numeric($data['passwordExpirationDays']) ? (float)$data['passwordExpirationDays'] : $data['passwordExpirationDays'];
        }
        if (isset($data['passwordMinimumLength'])) {
            $this->passwordMinimumLength = is_numeric($data['passwordMinimumLength']) ? (float)$data['passwordMinimumLength'] : $data['passwordMinimumLength'];
        }
        if (isset($data['passwordMinutesOfInactivityBeforeLock'])) {
            $this->passwordMinutesOfInactivityBeforeLock = is_numeric($data['passwordMinutesOfInactivityBeforeLock']) ? (float)$data['passwordMinutesOfInactivityBeforeLock'] : $data['passwordMinutesOfInactivityBeforeLock'];
        }
        if (isset($data['passwordPreviousPasswordBlockCount'])) {
            $this->passwordPreviousPasswordBlockCount = is_numeric($data['passwordPreviousPasswordBlockCount']) ? (float)$data['passwordPreviousPasswordBlockCount'] : $data['passwordPreviousPasswordBlockCount'];
        }
        if (isset($data['passwordRequired'])) {
            $this->passwordRequired = is_bool($data['passwordRequired']) ? $data['passwordRequired'] : (bool)$data['passwordRequired'];
        }
        if (isset($data['passwordRequiredType'])) {
            $this->passwordRequiredType = is_string($data['passwordRequiredType']) ? AndroidRequiredPasswordType::tryFrom($data['passwordRequiredType']) : $data['passwordRequiredType'];
        }
        if (isset($data['securityBlockJailbrokenDevices'])) {
            $this->securityBlockJailbrokenDevices = is_bool($data['securityBlockJailbrokenDevices']) ? $data['securityBlockJailbrokenDevices'] : (bool)$data['securityBlockJailbrokenDevices'];
        }
        if (isset($data['securityDisableUsbDebugging'])) {
            $this->securityDisableUsbDebugging = is_bool($data['securityDisableUsbDebugging']) ? $data['securityDisableUsbDebugging'] : (bool)$data['securityDisableUsbDebugging'];
        }
        if (isset($data['securityPreventInstallAppsFromUnknownSources'])) {
            $this->securityPreventInstallAppsFromUnknownSources = is_bool($data['securityPreventInstallAppsFromUnknownSources']) ? $data['securityPreventInstallAppsFromUnknownSources'] : (bool)$data['securityPreventInstallAppsFromUnknownSources'];
        }
        if (isset($data['securityRequireCompanyPortalAppIntegrity'])) {
            $this->securityRequireCompanyPortalAppIntegrity = is_bool($data['securityRequireCompanyPortalAppIntegrity']) ? $data['securityRequireCompanyPortalAppIntegrity'] : (bool)$data['securityRequireCompanyPortalAppIntegrity'];
        }
        if (isset($data['securityRequireGooglePlayServices'])) {
            $this->securityRequireGooglePlayServices = is_bool($data['securityRequireGooglePlayServices']) ? $data['securityRequireGooglePlayServices'] : (bool)$data['securityRequireGooglePlayServices'];
        }
        if (isset($data['securityRequireSafetyNetAttestationBasicIntegrity'])) {
            $this->securityRequireSafetyNetAttestationBasicIntegrity = is_bool($data['securityRequireSafetyNetAttestationBasicIntegrity']) ? $data['securityRequireSafetyNetAttestationBasicIntegrity'] : (bool)$data['securityRequireSafetyNetAttestationBasicIntegrity'];
        }
        if (isset($data['securityRequireSafetyNetAttestationCertifiedDevice'])) {
            $this->securityRequireSafetyNetAttestationCertifiedDevice = is_bool($data['securityRequireSafetyNetAttestationCertifiedDevice']) ? $data['securityRequireSafetyNetAttestationCertifiedDevice'] : (bool)$data['securityRequireSafetyNetAttestationCertifiedDevice'];
        }
        if (isset($data['securityRequireUpToDateSecurityProviders'])) {
            $this->securityRequireUpToDateSecurityProviders = is_bool($data['securityRequireUpToDateSecurityProviders']) ? $data['securityRequireUpToDateSecurityProviders'] : (bool)$data['securityRequireUpToDateSecurityProviders'];
        }
        if (isset($data['securityRequireVerifyApps'])) {
            $this->securityRequireVerifyApps = is_bool($data['securityRequireVerifyApps']) ? $data['securityRequireVerifyApps'] : (bool)$data['securityRequireVerifyApps'];
        }
        if (isset($data['storageRequireEncryption'])) {
            $this->storageRequireEncryption = is_bool($data['storageRequireEncryption']) ? $data['storageRequireEncryption'] : (bool)$data['storageRequireEncryption'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
