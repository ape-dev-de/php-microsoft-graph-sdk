<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceProtectionOverview
 */
class DeviceProtectionOverview
{
    public function __construct(
        /** Indicates number of devices reporting as clean */
        public ?float $cleanDeviceCount = null,
        /** Indicates number of devices with critical failures */
        public ?float $criticalFailuresDeviceCount = null,
        /** Indicates number of devices with inactive threat agent */
        public ?float $inactiveThreatAgentDeviceCount = null,
        /** Indicates number of devices pending full scan */
        public ?float $pendingFullScanDeviceCount = null,
        /** Indicates number of devices with pending manual steps */
        public ?float $pendingManualStepsDeviceCount = null,
        /** Indicates number of pending offline scan devices */
        public ?float $pendingOfflineScanDeviceCount = null,
        /** Indicates the number of devices that have a pending full scan. Valid values -2147483648 to 2147483647 */
        public ?float $pendingQuickScanDeviceCount = null,
        /** Indicates number of devices pending restart */
        public ?float $pendingRestartDeviceCount = null,
        /** Indicates number of devices with an old signature */
        public ?float $pendingSignatureUpdateDeviceCount = null,
        /** Total device count. */
        public ?float $totalReportedDeviceCount = null,
        /** Hardware information of a given device. */
        public ?string $unknownStateThreatAgentDeviceCount = null
    ) {}
}
