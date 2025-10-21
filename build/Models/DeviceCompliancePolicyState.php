<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCompliancePolicyState
 */
class DeviceCompliancePolicyState
{
    /**
     * The name of the policy for this policyBase
     */
    private ?string $displayName;

    /**
     */
    private ?string $platformType;

    /**
     * Count of how many setting a policy holds
     */
    private ?float $settingCount;

    /**
     */
    private array $settingStates = [];

    /**
     */
    private ?string $state;

    /**
     * Device Compliance Policy State for a given device.
     */
    private ?string $version;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getPlatformType(): ?string
    {
        return $this->platformType;
    }

    public function setPlatformType(?string $platformType): self
    {
        $this->platformType = $platformType;
        return $this;
    }

    public function getSettingCount(): ?float
    {
        return $this->settingCount;
    }

    public function setSettingCount(?float $settingCount): self
    {
        $this->settingCount = $settingCount;
        return $this;
    }

    public function getSettingStates(): array
    {
        return $this->settingStates;
    }

    public function setSettingStates(array $settingStates): self
    {
        $this->settingStates = $settingStates;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

}
