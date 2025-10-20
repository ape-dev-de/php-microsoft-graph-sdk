<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SettingStateDeviceSummary
 */
class SettingStateDeviceSummary
{
    /**
     * Device Compliant count for the setting
     */
    private ?float $compliantDeviceCount;

    /**
     * Device conflict error count for the setting
     */
    private ?float $conflictDeviceCount;

    /**
     * Device error count for the setting
     */
    private ?float $errorDeviceCount;

    /**
     * Name of the InstancePath for the setting
     */
    private ?string $instancePath;

    /**
     * Device NonCompliant count for the setting
     */
    private ?float $nonCompliantDeviceCount;

    /**
     * Device Not Applicable count for the setting
     */
    private ?float $notApplicableDeviceCount;

    /**
     * Device Compliant count for the setting
     */
    private ?float $remediatedDeviceCount;

    /**
     * Name of the setting
     */
    private ?string $settingName;

    /**
     * Device Compilance Policy and Configuration for a Setting State summary
     */
    private ?string $unknownDeviceCount;

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

    public function getInstancePath(): ?string
    {
        return $this->instancePath;
    }

    public function setInstancePath(?string $instancePath): self
    {
        $this->instancePath = $instancePath;
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

    public function getRemediatedDeviceCount(): ?float
    {
        return $this->remediatedDeviceCount;
    }

    public function setRemediatedDeviceCount(?float $remediatedDeviceCount): self
    {
        $this->remediatedDeviceCount = $remediatedDeviceCount;
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

    public function getUnknownDeviceCount(): ?string
    {
        return $this->unknownDeviceCount;
    }

    public function setUnknownDeviceCount(?string $unknownDeviceCount): self
    {
        $this->unknownDeviceCount = $unknownDeviceCount;
        return $this;
    }

}
