<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDeviceOverview
 */
class ManagedDeviceOverview
{
    /**
     * Distribution of Exchange Access State in Intune
     */
    private ?string $deviceExchangeAccessStateSummary;

    /**
     * Device operating system summary.
     */
    private ?string $deviceOperatingSystemSummary;

    /**
     * The number of devices enrolled in both MDM and EAS
     */
    private ?float $dualEnrolledDeviceCount;

    /**
     * Total enrolled device count. Does not include PC devices managed via Intune PC Agent
     */
    private ?float $enrolledDeviceCount;

    /**
     * Summary data for managed devices
     */
    private ?string $mdmEnrolledCount;

    public function getDeviceExchangeAccessStateSummary(): ?string
    {
        return $this->deviceExchangeAccessStateSummary;
    }

    public function setDeviceExchangeAccessStateSummary(?string $deviceExchangeAccessStateSummary): self
    {
        $this->deviceExchangeAccessStateSummary = $deviceExchangeAccessStateSummary;
        return $this;
    }

    public function getDeviceOperatingSystemSummary(): ?string
    {
        return $this->deviceOperatingSystemSummary;
    }

    public function setDeviceOperatingSystemSummary(?string $deviceOperatingSystemSummary): self
    {
        $this->deviceOperatingSystemSummary = $deviceOperatingSystemSummary;
        return $this;
    }

    public function getDualEnrolledDeviceCount(): ?float
    {
        return $this->dualEnrolledDeviceCount;
    }

    public function setDualEnrolledDeviceCount(?float $dualEnrolledDeviceCount): self
    {
        $this->dualEnrolledDeviceCount = $dualEnrolledDeviceCount;
        return $this;
    }

    public function getEnrolledDeviceCount(): ?float
    {
        return $this->enrolledDeviceCount;
    }

    public function setEnrolledDeviceCount(?float $enrolledDeviceCount): self
    {
        $this->enrolledDeviceCount = $enrolledDeviceCount;
        return $this;
    }

    public function getMdmEnrolledCount(): ?string
    {
        return $this->mdmEnrolledCount;
    }

    public function setMdmEnrolledCount(?string $mdmEnrolledCount): self
    {
        $this->mdmEnrolledCount = $mdmEnrolledCount;
        return $this;
    }

}
