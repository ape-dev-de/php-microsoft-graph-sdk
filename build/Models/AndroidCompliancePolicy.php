<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidCompliancePolicy
 */
class AndroidCompliancePolicy
{
    /**
     * Require that devices have enabled device threat protection.
     */
    private ?bool $deviceThreatProtectionEnabled;

    /**
     */
    private ?string $deviceThreatProtectionRequiredSecurityLevel;

    /**
     * Minimum Android security patch level.
     */
    private ?string $minAndroidSecurityPatchLevel;

    /**
     * Maximum Android version.
     */
    private ?string $osMaximumVersion;

    /**
     * Minimum Android version.
     */
    private ?string $osMinimumVersion;

    /**
     * Number of days before the password expires. Valid values 1 to 365
     */
    private ?float $passwordExpirationDays;

    /**
     * Minimum password length. Valid values 4 to 16
     */
    private ?float $passwordMinimumLength;

    /**
     * Minutes of inactivity before a password is required.
     */
    private ?float $passwordMinutesOfInactivityBeforeLock;

    /**
     * Number of previous passwords to block. Valid values 1 to 24
     */
    private ?float $passwordPreviousPasswordBlockCount;

    /**
     * Require a password to unlock device.
     */
    private ?bool $passwordRequired;

    /**
     */
    private ?string $passwordRequiredType;

    /**
     * Devices must not be jailbroken or rooted.
     */
    private ?bool $securityBlockJailbrokenDevices;

    /**
     * Disable USB debugging on Android devices.
     */
    private ?bool $securityDisableUsbDebugging;

    /**
     * Require that devices disallow installation of apps from unknown sources.
     */
    private ?bool $securityPreventInstallAppsFromUnknownSources;

    /**
     * Require the device to pass the Company Portal client app runtime integrity check.
     */
    private ?bool $securityRequireCompanyPortalAppIntegrity;

    /**
     * Require Google Play Services to be installed and enabled on the device.
     */
    private ?bool $securityRequireGooglePlayServices;

    /**
     * Require the device to pass the SafetyNet basic integrity check.
     */
    private ?bool $securityRequireSafetyNetAttestationBasicIntegrity;

    /**
     * Require the device to pass the SafetyNet certified device check.
     */
    private ?bool $securityRequireSafetyNetAttestationCertifiedDevice;

    /**
     * Require the device to have up to date security providers. The device will require Google Play Services to be enabled and up to date.
     */
    private ?bool $securityRequireUpToDateSecurityProviders;

    /**
     * Require the Android Verify apps feature is turned on.
     */
    private ?bool $securityRequireVerifyApps;

    /**
     * This class contains compliance settings for Android.
     */
    private ?string $storageRequireEncryption;

    public function getDeviceThreatProtectionEnabled(): ?bool
    {
        return $this->deviceThreatProtectionEnabled;
    }

    public function setDeviceThreatProtectionEnabled(?bool $deviceThreatProtectionEnabled): self
    {
        $this->deviceThreatProtectionEnabled = $deviceThreatProtectionEnabled;
        return $this;
    }

    public function getDeviceThreatProtectionRequiredSecurityLevel(): ?string
    {
        return $this->deviceThreatProtectionRequiredSecurityLevel;
    }

    public function setDeviceThreatProtectionRequiredSecurityLevel(?string $deviceThreatProtectionRequiredSecurityLevel): self
    {
        $this->deviceThreatProtectionRequiredSecurityLevel = $deviceThreatProtectionRequiredSecurityLevel;
        return $this;
    }

    public function getMinAndroidSecurityPatchLevel(): ?string
    {
        return $this->minAndroidSecurityPatchLevel;
    }

    public function setMinAndroidSecurityPatchLevel(?string $minAndroidSecurityPatchLevel): self
    {
        $this->minAndroidSecurityPatchLevel = $minAndroidSecurityPatchLevel;
        return $this;
    }

    public function getOsMaximumVersion(): ?string
    {
        return $this->osMaximumVersion;
    }

    public function setOsMaximumVersion(?string $osMaximumVersion): self
    {
        $this->osMaximumVersion = $osMaximumVersion;
        return $this;
    }

    public function getOsMinimumVersion(): ?string
    {
        return $this->osMinimumVersion;
    }

    public function setOsMinimumVersion(?string $osMinimumVersion): self
    {
        $this->osMinimumVersion = $osMinimumVersion;
        return $this;
    }

    public function getPasswordExpirationDays(): ?float
    {
        return $this->passwordExpirationDays;
    }

    public function setPasswordExpirationDays(?float $passwordExpirationDays): self
    {
        $this->passwordExpirationDays = $passwordExpirationDays;
        return $this;
    }

    public function getPasswordMinimumLength(): ?float
    {
        return $this->passwordMinimumLength;
    }

    public function setPasswordMinimumLength(?float $passwordMinimumLength): self
    {
        $this->passwordMinimumLength = $passwordMinimumLength;
        return $this;
    }

    public function getPasswordMinutesOfInactivityBeforeLock(): ?float
    {
        return $this->passwordMinutesOfInactivityBeforeLock;
    }

    public function setPasswordMinutesOfInactivityBeforeLock(?float $passwordMinutesOfInactivityBeforeLock): self
    {
        $this->passwordMinutesOfInactivityBeforeLock = $passwordMinutesOfInactivityBeforeLock;
        return $this;
    }

    public function getPasswordPreviousPasswordBlockCount(): ?float
    {
        return $this->passwordPreviousPasswordBlockCount;
    }

    public function setPasswordPreviousPasswordBlockCount(?float $passwordPreviousPasswordBlockCount): self
    {
        $this->passwordPreviousPasswordBlockCount = $passwordPreviousPasswordBlockCount;
        return $this;
    }

    public function getPasswordRequired(): ?bool
    {
        return $this->passwordRequired;
    }

    public function setPasswordRequired(?bool $passwordRequired): self
    {
        $this->passwordRequired = $passwordRequired;
        return $this;
    }

    public function getPasswordRequiredType(): ?string
    {
        return $this->passwordRequiredType;
    }

    public function setPasswordRequiredType(?string $passwordRequiredType): self
    {
        $this->passwordRequiredType = $passwordRequiredType;
        return $this;
    }

    public function getSecurityBlockJailbrokenDevices(): ?bool
    {
        return $this->securityBlockJailbrokenDevices;
    }

    public function setSecurityBlockJailbrokenDevices(?bool $securityBlockJailbrokenDevices): self
    {
        $this->securityBlockJailbrokenDevices = $securityBlockJailbrokenDevices;
        return $this;
    }

    public function getSecurityDisableUsbDebugging(): ?bool
    {
        return $this->securityDisableUsbDebugging;
    }

    public function setSecurityDisableUsbDebugging(?bool $securityDisableUsbDebugging): self
    {
        $this->securityDisableUsbDebugging = $securityDisableUsbDebugging;
        return $this;
    }

    public function getSecurityPreventInstallAppsFromUnknownSources(): ?bool
    {
        return $this->securityPreventInstallAppsFromUnknownSources;
    }

    public function setSecurityPreventInstallAppsFromUnknownSources(?bool $securityPreventInstallAppsFromUnknownSources): self
    {
        $this->securityPreventInstallAppsFromUnknownSources = $securityPreventInstallAppsFromUnknownSources;
        return $this;
    }

    public function getSecurityRequireCompanyPortalAppIntegrity(): ?bool
    {
        return $this->securityRequireCompanyPortalAppIntegrity;
    }

    public function setSecurityRequireCompanyPortalAppIntegrity(?bool $securityRequireCompanyPortalAppIntegrity): self
    {
        $this->securityRequireCompanyPortalAppIntegrity = $securityRequireCompanyPortalAppIntegrity;
        return $this;
    }

    public function getSecurityRequireGooglePlayServices(): ?bool
    {
        return $this->securityRequireGooglePlayServices;
    }

    public function setSecurityRequireGooglePlayServices(?bool $securityRequireGooglePlayServices): self
    {
        $this->securityRequireGooglePlayServices = $securityRequireGooglePlayServices;
        return $this;
    }

    public function getSecurityRequireSafetyNetAttestationBasicIntegrity(): ?bool
    {
        return $this->securityRequireSafetyNetAttestationBasicIntegrity;
    }

    public function setSecurityRequireSafetyNetAttestationBasicIntegrity(?bool $securityRequireSafetyNetAttestationBasicIntegrity): self
    {
        $this->securityRequireSafetyNetAttestationBasicIntegrity = $securityRequireSafetyNetAttestationBasicIntegrity;
        return $this;
    }

    public function getSecurityRequireSafetyNetAttestationCertifiedDevice(): ?bool
    {
        return $this->securityRequireSafetyNetAttestationCertifiedDevice;
    }

    public function setSecurityRequireSafetyNetAttestationCertifiedDevice(?bool $securityRequireSafetyNetAttestationCertifiedDevice): self
    {
        $this->securityRequireSafetyNetAttestationCertifiedDevice = $securityRequireSafetyNetAttestationCertifiedDevice;
        return $this;
    }

    public function getSecurityRequireUpToDateSecurityProviders(): ?bool
    {
        return $this->securityRequireUpToDateSecurityProviders;
    }

    public function setSecurityRequireUpToDateSecurityProviders(?bool $securityRequireUpToDateSecurityProviders): self
    {
        $this->securityRequireUpToDateSecurityProviders = $securityRequireUpToDateSecurityProviders;
        return $this;
    }

    public function getSecurityRequireVerifyApps(): ?bool
    {
        return $this->securityRequireVerifyApps;
    }

    public function setSecurityRequireVerifyApps(?bool $securityRequireVerifyApps): self
    {
        $this->securityRequireVerifyApps = $securityRequireVerifyApps;
        return $this;
    }

    public function getStorageRequireEncryption(): ?string
    {
        return $this->storageRequireEncryption;
    }

    public function setStorageRequireEncryption(?string $storageRequireEncryption): self
    {
        $this->storageRequireEncryption = $storageRequireEncryption;
        return $this;
    }

}
