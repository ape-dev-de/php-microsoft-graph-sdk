<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCompliancePolicyDeviceStateSummary
 */
class DeviceCompliancePolicyDeviceStateSummary
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Number of compliant devices */
        public ?float $compliantDeviceCount = null,
        /** Number of devices that have compliance managed by System Center Configuration Manager */
        public ?float $configManagerCount = null,
        /** Number of conflict devices */
        public ?float $conflictDeviceCount = null,
        /** Number of error devices */
        public ?float $errorDeviceCount = null,
        /** Number of devices that are in grace period */
        public ?float $inGracePeriodCount = null,
        /** Number of NonCompliant devices */
        public ?float $nonCompliantDeviceCount = null,
        /** Number of not applicable devices */
        public ?float $notApplicableDeviceCount = null,
        /** Number of remediated devices */
        public ?float $remediatedDeviceCount = null,
        /** Number of unknown devices */
        public ?float $unknownDeviceCount = null
    ) {}
}
