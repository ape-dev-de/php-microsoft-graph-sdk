<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosManagedAppProtection
 */
class IosManagedAppProtection
{
    /**
     */
    private ?string $appDataEncryptionType;

    /**
     * A custom browser protocol to open weblink on iOS. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     */
    private ?string $customBrowserProtocol;

    /**
     * Count of apps to which the current policy is deployed.
     */
    private ?float $deployedAppCount;

    /**
     * Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True.
     */
    private ?bool $faceIdBlocked;

    /**
     * Versions less than the specified version will block the managed app from accessing company data.
     */
    private ?string $minimumRequiredSdkVersion;

    /**
     * List of apps to which the policy is deployed.
     */
    private array $apps = [];

    /**
     * Policy used to configure detailed management settings targeted to specific security groups and for a specified set of apps on an iOS device
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

    public function getCustomBrowserProtocol(): ?string
    {
        return $this->customBrowserProtocol;
    }

    public function setCustomBrowserProtocol(?string $customBrowserProtocol): self
    {
        $this->customBrowserProtocol = $customBrowserProtocol;
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

    public function getFaceIdBlocked(): ?bool
    {
        return $this->faceIdBlocked;
    }

    public function setFaceIdBlocked(?bool $faceIdBlocked): self
    {
        $this->faceIdBlocked = $faceIdBlocked;
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
