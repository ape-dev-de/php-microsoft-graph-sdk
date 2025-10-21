<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidManagedAppProtection
 */
class AndroidManagedAppProtection
{
    /**
     * Friendly name of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     */
    private ?string $customBrowserDisplayName;

    /**
     * Unique identifier of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     */
    private ?string $customBrowserPackageId;

    /**
     * Count of apps to which the current policy is deployed.
     */
    private ?float $deployedAppCount;

    /**
     * When this setting is enabled, app level encryption is disabled if device level encryption is enabled
     */
    private ?bool $disableAppEncryptionIfDeviceEncryptionIsEnabled;

    /**
     * Indicates whether application data for managed apps should be encrypted
     */
    private ?bool $encryptAppData;

    /**
     * Define the oldest required Android security patch level a user can have to gain secure access to the app.
     */
    private ?string $minimumRequiredPatchVersion;

    /**
     * Define the oldest recommended Android security patch level a user can have for secure access to the app.
     */
    private ?string $minimumWarningPatchVersion;

    /**
     * Indicates whether a managed user can take screen captures of managed apps
     */
    private ?bool $screenCaptureBlocked;

    /**
     * List of apps to which the policy is deployed.
     */
    private array $apps = [];

    /**
     * Policy used to configure detailed management settings targeted to specific security groups and for a specified set of apps on an Android device
     */
    private ?string $deploymentSummary;


    public function getCustomBrowserDisplayName(): ?string
    {
        return $this->customBrowserDisplayName;
    }

    public function setCustomBrowserDisplayName(?string $customBrowserDisplayName): self
    {
        $this->customBrowserDisplayName = $customBrowserDisplayName;
        return $this;
    }

    public function getCustomBrowserPackageId(): ?string
    {
        return $this->customBrowserPackageId;
    }

    public function setCustomBrowserPackageId(?string $customBrowserPackageId): self
    {
        $this->customBrowserPackageId = $customBrowserPackageId;
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

    public function getMinimumRequiredPatchVersion(): ?string
    {
        return $this->minimumRequiredPatchVersion;
    }

    public function setMinimumRequiredPatchVersion(?string $minimumRequiredPatchVersion): self
    {
        $this->minimumRequiredPatchVersion = $minimumRequiredPatchVersion;
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
