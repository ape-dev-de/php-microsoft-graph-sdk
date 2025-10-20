<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceProtectionOverview
 */
class DeviceProtectionOverview
{
    /**
     * Indicates number of devices reporting as clean
     */
    private ?float $cleanDeviceCount;

    /**
     * Indicates number of devices with critical failures
     */
    private ?float $criticalFailuresDeviceCount;

    /**
     * Indicates number of devices with inactive threat agent
     */
    private ?float $inactiveThreatAgentDeviceCount;

    /**
     * Indicates number of devices pending full scan
     */
    private ?float $pendingFullScanDeviceCount;

    /**
     * Indicates number of devices with pending manual steps
     */
    private ?float $pendingManualStepsDeviceCount;

    /**
     * Indicates number of pending offline scan devices
     */
    private ?float $pendingOfflineScanDeviceCount;

    /**
     * Indicates the number of devices that have a pending full scan. Valid values -2147483648 to 2147483647
     */
    private ?float $pendingQuickScanDeviceCount;

    /**
     * Indicates number of devices pending restart
     */
    private ?float $pendingRestartDeviceCount;

    /**
     * Indicates number of devices with an old signature
     */
    private ?float $pendingSignatureUpdateDeviceCount;

    /**
     * Total device count.
     */
    private ?float $totalReportedDeviceCount;

    /**
     * Hardware information of a given device.
     */
    private ?string $unknownStateThreatAgentDeviceCount;

    public function getCleanDeviceCount(): ?float
    {
        return $this->cleanDeviceCount;
    }

    public function setCleanDeviceCount(?float $cleanDeviceCount): self
    {
        $this->cleanDeviceCount = $cleanDeviceCount;
        return $this;
    }

    public function getCriticalFailuresDeviceCount(): ?float
    {
        return $this->criticalFailuresDeviceCount;
    }

    public function setCriticalFailuresDeviceCount(?float $criticalFailuresDeviceCount): self
    {
        $this->criticalFailuresDeviceCount = $criticalFailuresDeviceCount;
        return $this;
    }

    public function getInactiveThreatAgentDeviceCount(): ?float
    {
        return $this->inactiveThreatAgentDeviceCount;
    }

    public function setInactiveThreatAgentDeviceCount(?float $inactiveThreatAgentDeviceCount): self
    {
        $this->inactiveThreatAgentDeviceCount = $inactiveThreatAgentDeviceCount;
        return $this;
    }

    public function getPendingFullScanDeviceCount(): ?float
    {
        return $this->pendingFullScanDeviceCount;
    }

    public function setPendingFullScanDeviceCount(?float $pendingFullScanDeviceCount): self
    {
        $this->pendingFullScanDeviceCount = $pendingFullScanDeviceCount;
        return $this;
    }

    public function getPendingManualStepsDeviceCount(): ?float
    {
        return $this->pendingManualStepsDeviceCount;
    }

    public function setPendingManualStepsDeviceCount(?float $pendingManualStepsDeviceCount): self
    {
        $this->pendingManualStepsDeviceCount = $pendingManualStepsDeviceCount;
        return $this;
    }

    public function getPendingOfflineScanDeviceCount(): ?float
    {
        return $this->pendingOfflineScanDeviceCount;
    }

    public function setPendingOfflineScanDeviceCount(?float $pendingOfflineScanDeviceCount): self
    {
        $this->pendingOfflineScanDeviceCount = $pendingOfflineScanDeviceCount;
        return $this;
    }

    public function getPendingQuickScanDeviceCount(): ?float
    {
        return $this->pendingQuickScanDeviceCount;
    }

    public function setPendingQuickScanDeviceCount(?float $pendingQuickScanDeviceCount): self
    {
        $this->pendingQuickScanDeviceCount = $pendingQuickScanDeviceCount;
        return $this;
    }

    public function getPendingRestartDeviceCount(): ?float
    {
        return $this->pendingRestartDeviceCount;
    }

    public function setPendingRestartDeviceCount(?float $pendingRestartDeviceCount): self
    {
        $this->pendingRestartDeviceCount = $pendingRestartDeviceCount;
        return $this;
    }

    public function getPendingSignatureUpdateDeviceCount(): ?float
    {
        return $this->pendingSignatureUpdateDeviceCount;
    }

    public function setPendingSignatureUpdateDeviceCount(?float $pendingSignatureUpdateDeviceCount): self
    {
        $this->pendingSignatureUpdateDeviceCount = $pendingSignatureUpdateDeviceCount;
        return $this;
    }

    public function getTotalReportedDeviceCount(): ?float
    {
        return $this->totalReportedDeviceCount;
    }

    public function setTotalReportedDeviceCount(?float $totalReportedDeviceCount): self
    {
        $this->totalReportedDeviceCount = $totalReportedDeviceCount;
        return $this;
    }

    public function getUnknownStateThreatAgentDeviceCount(): ?string
    {
        return $this->unknownStateThreatAgentDeviceCount;
    }

    public function setUnknownStateThreatAgentDeviceCount(?string $unknownStateThreatAgentDeviceCount): self
    {
        $this->unknownStateThreatAgentDeviceCount = $unknownStateThreatAgentDeviceCount;
        return $this;
    }

}
