<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefaultManagedAppProtection
 */
class DefaultManagedAppProtection
{
    /**
     */
    private ?string $appDataEncryptionType;

    /**
     * A set of string key and string value pairs to be sent to the affected users, unalterned by this service
     */
    private array $customSettings = [];

    /**
     * Count of apps to which the current policy is deployed.
     */
    private ?float $deployedAppCount;

    /**
     * When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only)
     */
    private ?bool $disableAppEncryptionIfDeviceEncryptionIsEnabled;

    /**
     * Indicates whether managed-app data should be encrypted. (Android only)
     */
    private ?bool $encryptAppData;

    /**
     * Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only)
     */
    private ?bool $faceIdBlocked;

    /**
     * Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only)
     */
    private ?string $minimumRequiredPatchVersion;

    /**
     * Versions less than the specified version will block the managed app from accessing company data. (iOS Only)
     */
    private ?string $minimumRequiredSdkVersion;

    /**
     * Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only)
     */
    private ?string $minimumWarningPatchVersion;

    /**
     * Indicates whether screen capture is blocked. (Android only)
     */
    private ?bool $screenCaptureBlocked;

    /**
     * List of apps to which the policy is deployed.
     */
    private array $apps = [];

    /**
     * Policy used to configure detailed management settings for a specified set of apps for all users not targeted by a TargetedManagedAppProtection Policy
     */
    private ?string $deploymentSummary;


    public function getAppDataEncryptionType(): ?string
    {
        return $this->appDataEncryptionType;
    }

    public function setAppDataEncryptionType(?string $appDataEncryptionType): self
    {
        $this->appDataEncryptionType = $appDataEncryptionType;
        return $this;
    }

    public function getCustomSettings(): array
    {
        return $this->customSettings;
    }

    public function setCustomSettings(array $customSettings): self
    {
        $this->customSettings = $customSettings;
        return $this;
    }

    public function getDeployedAppCount(): ?float
    {
        return $this->deployedAppCount;
    }

    public function setDeployedAppCount(?float $deployedAppCount): self
    {
        $this->deployedAppCount = $deployedAppCount;
        return $this;
    }

    public function getDisableAppEncryptionIfDeviceEncryptionIsEnabled(): ?bool
    {
        return $this->disableAppEncryptionIfDeviceEncryptionIsEnabled;
    }

    public function setDisableAppEncryptionIfDeviceEncryptionIsEnabled(?bool $disableAppEncryptionIfDeviceEncryptionIsEnabled): self
    {
        $this->disableAppEncryptionIfDeviceEncryptionIsEnabled = $disableAppEncryptionIfDeviceEncryptionIsEnabled;
        return $this;
    }

    public function getEncryptAppData(): ?bool
    {
        return $this->encryptAppData;
    }

    public function setEncryptAppData(?bool $encryptAppData): self
    {
        $this->encryptAppData = $encryptAppData;
        return $this;
    }

    public function getFaceIdBlocked(): ?bool
    {
        return $this->faceIdBlocked;
    }

    public function setFaceIdBlocked(?bool $faceIdBlocked): self
    {
        $this->faceIdBlocked = $faceIdBlocked;
        return $this;
    }

    public function getMinimumRequiredPatchVersion(): ?string
    {
        return $this->minimumRequiredPatchVersion;
    }

    public function setMinimumRequiredPatchVersion(?string $minimumRequiredPatchVersion): self
    {
        $this->minimumRequiredPatchVersion = $minimumRequiredPatchVersion;
        return $this;
    }

    public function getMinimumRequiredSdkVersion(): ?string
    {
        return $this->minimumRequiredSdkVersion;
    }

    public function setMinimumRequiredSdkVersion(?string $minimumRequiredSdkVersion): self
    {
        $this->minimumRequiredSdkVersion = $minimumRequiredSdkVersion;
        return $this;
    }

    public function getMinimumWarningPatchVersion(): ?string
    {
        return $this->minimumWarningPatchVersion;
    }

    public function setMinimumWarningPatchVersion(?string $minimumWarningPatchVersion): self
    {
        $this->minimumWarningPatchVersion = $minimumWarningPatchVersion;
        return $this;
    }

    public function getScreenCaptureBlocked(): ?bool
    {
        return $this->screenCaptureBlocked;
    }

    public function setScreenCaptureBlocked(?bool $screenCaptureBlocked): self
    {
        $this->screenCaptureBlocked = $screenCaptureBlocked;
        return $this;
    }

    public function getApps(): array
    {
        return $this->apps;
    }

    public function setApps(array $apps): self
    {
        $this->apps = $apps;
        return $this;
    }

    public function getDeploymentSummary(): ?string
    {
        return $this->deploymentSummary;
    }

    public function setDeploymentSummary(?string $deploymentSummary): self
    {
        $this->deploymentSummary = $deploymentSummary;
        return $this;
    }

}
