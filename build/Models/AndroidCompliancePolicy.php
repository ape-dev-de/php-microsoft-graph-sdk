<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidCompliancePolicy
 */
class AndroidCompliancePolicy
{
    public function __construct(
        /** Require that devices have enabled device threat protection. */
        public ?bool $deviceThreatProtectionEnabled = null,
        /**  */
        public ?string $deviceThreatProtectionRequiredSecurityLevel = null,
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
        public ?string $passwordRequiredType = null,
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
        /** This class contains compliance settings for Android. */
        public ?string $storageRequireEncryption = null
    ) {}
}
