<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceProtectionOverview resources
 *
 * Available select fields:
 * - cleanDeviceCount
 * - criticalFailuresDeviceCount
 * - inactiveThreatAgentDeviceCount
 * - pendingFullScanDeviceCount
 * - pendingManualStepsDeviceCount
 * - pendingOfflineScanDeviceCount
 * - pendingQuickScanDeviceCount
 * - pendingRestartDeviceCount
 * - pendingSignatureUpdateDeviceCount
 * - totalReportedDeviceCount
 * - unknownStateThreatAgentDeviceCount
 */
class DeviceProtectionOverviewQueryOptions extends QueryOptions
{
    public const FIELD_CLEAN_DEVICE_COUNT = 'cleanDeviceCount';
    public const FIELD_CRITICAL_FAILURES_DEVICE_COUNT = 'criticalFailuresDeviceCount';
    public const FIELD_INACTIVE_THREAT_AGENT_DEVICE_COUNT = 'inactiveThreatAgentDeviceCount';
    public const FIELD_PENDING_FULL_SCAN_DEVICE_COUNT = 'pendingFullScanDeviceCount';
    public const FIELD_PENDING_MANUAL_STEPS_DEVICE_COUNT = 'pendingManualStepsDeviceCount';
    public const FIELD_PENDING_OFFLINE_SCAN_DEVICE_COUNT = 'pendingOfflineScanDeviceCount';
    public const FIELD_PENDING_QUICK_SCAN_DEVICE_COUNT = 'pendingQuickScanDeviceCount';
    public const FIELD_PENDING_RESTART_DEVICE_COUNT = 'pendingRestartDeviceCount';
    public const FIELD_PENDING_SIGNATURE_UPDATE_DEVICE_COUNT = 'pendingSignatureUpdateDeviceCount';
    public const FIELD_TOTAL_REPORTED_DEVICE_COUNT = 'totalReportedDeviceCount';
    public const FIELD_UNKNOWN_STATE_THREAT_AGENT_DEVICE_COUNT = 'unknownStateThreatAgentDeviceCount';

    /**
     * Select specific DeviceProtectionOverview properties
     * 
     * @param array<string> $select Use DeviceProtectionOverviewQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
