<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidCompliancePolicy
 */
class AndroidCompliancePolicy
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** DateTime the object was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Admin provided description of the Device Configuration. */
        public ?string $description = null,
        /** Admin provided name of the device configuration. */
        public ?string $displayName = null,
        /** DateTime the object was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Version of the device configuration. */
        public ?float $version = null,
        /** The collection of assignments for this compliance policy. */
        public array $assignments = [],
        /** Compliance Setting State Device Summary */
        public array $deviceSettingStateSummaries = [],
        /** List of DeviceComplianceDeviceStatus. */
        public array $deviceStatuses = [],
        /** Device compliance devices status overview */
        public ?DeviceComplianceDeviceOverview $deviceStatusOverview = null,
        /** The list of scheduled action per rule for this compliance policy. This is a required property when creating any individual per-platform compliance policies. */
        public array $scheduledActionsForRule = [],
        /** List of DeviceComplianceUserStatus. */
        public array $userStatuses = [],
        /** Device compliance users status overview */
        public ?DeviceComplianceUserOverview $userStatusOverview = null,
        /** Require that devices have enabled device threat protection. */
        public ?bool $deviceThreatProtectionEnabled = null,
        /**  */
        public ?DeviceThreatProtectionLevel $deviceThreatProtectionRequiredSecurityLevel = null,
        /** Minimum Android security patch level. */
        public ?string $minAndroidSecurityPatchLevel = null,
        /** Maximum Android version. */
        public ?string $osMaximumVersion = null,
        /** Minimum Android version. */
        public ?string $osMinimumVersion = null,
        /** Number of days before the password expires. Valid values 1 to 365 */
        public ?float $passwordExpirationDays = null,
        /** Minimum password length. Valid values 4 to 16 */
        public ?float $passwordMinimumLength = null,
        /** Minutes of inactivity before a password is required. */
        public ?float $passwordMinutesOfInactivityBeforeLock = null,
        /** Number of previous passwords to block. Valid values 1 to 24 */
        public ?float $passwordPreviousPasswordBlockCount = null,
        /** Require a password to unlock device. */
        public ?bool $passwordRequired = null,
        /**  */
        public ?AndroidRequiredPasswordType $passwordRequiredType = null,
        /** Devices must not be jailbroken or rooted. */
        public ?bool $securityBlockJailbrokenDevices = null,
        /** Disable USB debugging on Android devices. */
        public ?bool $securityDisableUsbDebugging = null,
        /** Require that devices disallow installation of apps from unknown sources. */
        public ?bool $securityPreventInstallAppsFromUnknownSources = null,
        /** Require the device to pass the Company Portal client app runtime integrity check. */
        public ?bool $securityRequireCompanyPortalAppIntegrity = null,
        /** Require Google Play Services to be installed and enabled on the device. */
        public ?bool $securityRequireGooglePlayServices = null,
        /** Require the device to pass the SafetyNet basic integrity check. */
        public ?bool $securityRequireSafetyNetAttestationBasicIntegrity = null,
        /** Require the device to pass the SafetyNet certified device check. */
        public ?bool $securityRequireSafetyNetAttestationCertifiedDevice = null,
        /** Require the device to have up to date security providers. The device will require Google Play Services to be enabled and up to date. */
        public ?bool $securityRequireUpToDateSecurityProviders = null,
        /** Require the Android Verify apps feature is turned on. */
        public ?bool $securityRequireVerifyApps = null,
        /** Require encryption on Android devices. */
        public ?bool $storageRequireEncryption = null
    ) {}
}
