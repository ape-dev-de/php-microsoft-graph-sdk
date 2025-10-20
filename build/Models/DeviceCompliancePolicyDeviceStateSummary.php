<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCompliancePolicyDeviceStateSummary
 */
class DeviceCompliancePolicyDeviceStateSummary
{
    /**
     * Number of compliant devices
     */
    private ?float $compliantDeviceCount;

    /**
     * Number of devices that have compliance managed by System Center Configuration Manager
     */
    private ?float $configManagerCount;

    /**
     * Number of conflict devices
     */
    private ?float $conflictDeviceCount;

    /**
     * Number of error devices
     */
    private ?float $errorDeviceCount;

    /**
     * Number of devices that are in grace period
     */
    private ?float $inGracePeriodCount;

    /**
     * Number of NonCompliant devices
     */
    private ?float $nonCompliantDeviceCount;

    /**
     * Number of not applicable devices
     */
    private ?float $notApplicableDeviceCount;

    /**
     * Number of remediated devices
     */
    private ?float $remediatedDeviceCount;

    /**
     * Number of unknown devices
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

    public function getConfigManagerCount(): ?float
    {
        return $this->configManagerCount;
    }

    public function setConfigManagerCount(?float $configManagerCount): self
    {
        $this->configManagerCount = $configManagerCount;
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

    public function getInGracePeriodCount(): ?float
    {
        return $this->inGracePeriodCount;
    }

    public function setInGracePeriodCount(?float $inGracePeriodCount): self
    {
        $this->inGracePeriodCount = $inGracePeriodCount;
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
