<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConfigurationManagerClientEnabledFeatures
 */
class ConfigurationManagerClientEnabledFeatures
{
    /**
     * Whether compliance policy is managed by Intune
     */
    private ?bool $compliancePolicy;

    /**
     * Whether device configuration is managed by Intune
     */
    private ?bool $deviceConfiguration;

    /**
     * Whether inventory is managed by Intune
     */
    private ?bool $inventory;

    /**
     * Whether modern application is managed by Intune
     */
    private ?bool $modernApps;

    /**
     * Whether resource access is managed by Intune
     */
    private ?bool $resourceAccess;

    /**
     * configuration Manager client enabled features
     */
    private ?string $windowsUpdateForBusiness;


    public function getCompliancePolicy(): ?bool
    {
        return $this->compliancePolicy;
    }

    public function setCompliancePolicy(?bool $compliancePolicy): self
    {
        $this->compliancePolicy = $compliancePolicy;
        return $this;
    }

    public function getDeviceConfiguration(): ?bool
    {
        return $this->deviceConfiguration;
    }

    public function setDeviceConfiguration(?bool $deviceConfiguration): self
    {
        $this->deviceConfiguration = $deviceConfiguration;
        return $this;
    }

    public function getInventory(): ?bool
    {
        return $this->inventory;
    }

    public function setInventory(?bool $inventory): self
    {
        $this->inventory = $inventory;
        return $this;
    }

    public function getModernApps(): ?bool
    {
        return $this->modernApps;
    }

    public function setModernApps(?bool $modernApps): self
    {
        $this->modernApps = $modernApps;
        return $this;
    }

    public function getResourceAccess(): ?bool
    {
        return $this->resourceAccess;
    }

    public function setResourceAccess(?bool $resourceAccess): self
    {
        $this->resourceAccess = $resourceAccess;
        return $this;
    }

    public function getWindowsUpdateForBusiness(): ?string
    {
        return $this->windowsUpdateForBusiness;
    }

    public function setWindowsUpdateForBusiness(?string $windowsUpdateForBusiness): self
    {
        $this->windowsUpdateForBusiness = $windowsUpdateForBusiness;
        return $this;
    }

}
