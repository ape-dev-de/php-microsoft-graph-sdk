<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCompliancePolicySettingStateSummary
 */
class DeviceCompliancePolicySettingStateSummary
{
    /**
     * Number of compliant devices
     */
    private ?float $compliantDeviceCount;

    /**
     * Number of conflict devices
     */
    private ?float $conflictDeviceCount;

    /**
     * Number of error devices
     */
    private ?float $errorDeviceCount;

    /**
     * Number of NonCompliant devices
     */
    private ?float $nonCompliantDeviceCount;

    /**
     * Number of not applicable devices
     */
    private ?float $notApplicableDeviceCount;

    /**
     */
    private ?string $platformType;

    /**
     * Number of remediated devices
     */
    private ?float $remediatedDeviceCount;

    /**
     * The setting class name and property name.
     */
    private ?string $setting;

    /**
     * Name of the setting.
     */
    private ?string $settingName;

    /**
     * Number of unknown devices
     */
    private ?float $unknownDeviceCount;

    /**
     * Device Compilance Policy Setting State summary across the account.
     * @var string[]
     */
    private array $deviceComplianceSettingStates = [];


    public function getCompliantDeviceCount(): ?float
    {
        return $this->compliantDeviceCount;
    }

    public function setCompliantDeviceCount(?float $compliantDeviceCount): self
    {
        $this->compliantDeviceCount = $compliantDeviceCount;
        return $this;
    }

    public function getConflictDeviceCount(): ?float
    {
        return $this->conflictDeviceCount;
    }

    public function setConflictDeviceCount(?float $conflictDeviceCount): self
    {
        $this->conflictDeviceCount = $conflictDeviceCount;
        return $this;
    }

    public function getErrorDeviceCount(): ?float
    {
        return $this->errorDeviceCount;
    }

    public function setErrorDeviceCount(?float $errorDeviceCount): self
    {
        $this->errorDeviceCount = $errorDeviceCount;
        return $this;
    }

    public function getNonCompliantDeviceCount(): ?float
    {
        return $this->nonCompliantDeviceCount;
    }

    public function setNonCompliantDeviceCount(?float $nonCompliantDeviceCount): self
    {
        $this->nonCompliantDeviceCount = $nonCompliantDeviceCount;
        return $this;
    }

    public function getNotApplicableDeviceCount(): ?float
    {
        return $this->notApplicableDeviceCount;
    }

    public function setNotApplicableDeviceCount(?float $notApplicableDeviceCount): self
    {
        $this->notApplicableDeviceCount = $notApplicableDeviceCount;
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

    public function getRemediatedDeviceCount(): ?float
    {
        return $this->remediatedDeviceCount;
    }

    public function setRemediatedDeviceCount(?float $remediatedDeviceCount): self
    {
        $this->remediatedDeviceCount = $remediatedDeviceCount;
        return $this;
    }

    public function getSetting(): ?string
    {
        return $this->setting;
    }

    public function setSetting(?string $setting): self
    {
        $this->setting = $setting;
        return $this;
    }

    public function getSettingName(): ?string
    {
        return $this->settingName;
    }

    public function setSettingName(?string $settingName): self
    {
        $this->settingName = $settingName;
        return $this;
    }

    public function getUnknownDeviceCount(): ?float
    {
        return $this->unknownDeviceCount;
    }

    public function setUnknownDeviceCount(?float $unknownDeviceCount): self
    {
        $this->unknownDeviceCount = $unknownDeviceCount;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDeviceComplianceSettingStates(): array
    {
        return $this->deviceComplianceSettingStates;
    }

    /**
     * @param string[] $deviceComplianceSettingStates
     */
    public function setDeviceComplianceSettingStates(array $deviceComplianceSettingStates): self
    {
        $this->deviceComplianceSettingStates = $deviceComplianceSettingStates;
        return $this;
    }

}
