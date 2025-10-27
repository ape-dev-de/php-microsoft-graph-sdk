<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceProtectionOverview
 */
class DeviceProtectionOverview
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates number of devices reporting as clean */
    public ?float $cleanDeviceCount = null;

    /** Indicates number of devices with critical failures */
    public ?float $criticalFailuresDeviceCount = null;

    /** Indicates number of devices with inactive threat agent */
    public ?float $inactiveThreatAgentDeviceCount = null;

    /** Indicates number of devices pending full scan */
    public ?float $pendingFullScanDeviceCount = null;

    /** Indicates number of devices with pending manual steps */
    public ?float $pendingManualStepsDeviceCount = null;

    /** Indicates number of pending offline scan devices */
    public ?float $pendingOfflineScanDeviceCount = null;

    /** Indicates the number of devices that have a pending full scan. Valid values -2147483648 to 2147483647 */
    public ?float $pendingQuickScanDeviceCount = null;

    /** Indicates number of devices pending restart */
    public ?float $pendingRestartDeviceCount = null;

    /** Indicates number of devices with an old signature */
    public ?float $pendingSignatureUpdateDeviceCount = null;

    /** Total device count. */
    public ?float $totalReportedDeviceCount = null;

    /** Indicates number of devices with threat agent state as unknown */
    public ?float $unknownStateThreatAgentDeviceCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['cleanDeviceCount'])) {
            $this->cleanDeviceCount = is_numeric($data['cleanDeviceCount']) ? (float)$data['cleanDeviceCount'] : $data['cleanDeviceCount'];
        }
        if (isset($data['criticalFailuresDeviceCount'])) {
            $this->criticalFailuresDeviceCount = is_numeric($data['criticalFailuresDeviceCount']) ? (float)$data['criticalFailuresDeviceCount'] : $data['criticalFailuresDeviceCount'];
        }
        if (isset($data['inactiveThreatAgentDeviceCount'])) {
            $this->inactiveThreatAgentDeviceCount = is_numeric($data['inactiveThreatAgentDeviceCount']) ? (float)$data['inactiveThreatAgentDeviceCount'] : $data['inactiveThreatAgentDeviceCount'];
        }
        if (isset($data['pendingFullScanDeviceCount'])) {
            $this->pendingFullScanDeviceCount = is_numeric($data['pendingFullScanDeviceCount']) ? (float)$data['pendingFullScanDeviceCount'] : $data['pendingFullScanDeviceCount'];
        }
        if (isset($data['pendingManualStepsDeviceCount'])) {
            $this->pendingManualStepsDeviceCount = is_numeric($data['pendingManualStepsDeviceCount']) ? (float)$data['pendingManualStepsDeviceCount'] : $data['pendingManualStepsDeviceCount'];
        }
        if (isset($data['pendingOfflineScanDeviceCount'])) {
            $this->pendingOfflineScanDeviceCount = is_numeric($data['pendingOfflineScanDeviceCount']) ? (float)$data['pendingOfflineScanDeviceCount'] : $data['pendingOfflineScanDeviceCount'];
        }
        if (isset($data['pendingQuickScanDeviceCount'])) {
            $this->pendingQuickScanDeviceCount = is_numeric($data['pendingQuickScanDeviceCount']) ? (float)$data['pendingQuickScanDeviceCount'] : $data['pendingQuickScanDeviceCount'];
        }
        if (isset($data['pendingRestartDeviceCount'])) {
            $this->pendingRestartDeviceCount = is_numeric($data['pendingRestartDeviceCount']) ? (float)$data['pendingRestartDeviceCount'] : $data['pendingRestartDeviceCount'];
        }
        if (isset($data['pendingSignatureUpdateDeviceCount'])) {
            $this->pendingSignatureUpdateDeviceCount = is_numeric($data['pendingSignatureUpdateDeviceCount']) ? (float)$data['pendingSignatureUpdateDeviceCount'] : $data['pendingSignatureUpdateDeviceCount'];
        }
        if (isset($data['totalReportedDeviceCount'])) {
            $this->totalReportedDeviceCount = is_numeric($data['totalReportedDeviceCount']) ? (float)$data['totalReportedDeviceCount'] : $data['totalReportedDeviceCount'];
        }
        if (isset($data['unknownStateThreatAgentDeviceCount'])) {
            $this->unknownStateThreatAgentDeviceCount = is_numeric($data['unknownStateThreatAgentDeviceCount']) ? (float)$data['unknownStateThreatAgentDeviceCount'] : $data['unknownStateThreatAgentDeviceCount'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
