<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationDeviceStateSummary
 */
class DeviceConfigurationDeviceStateSummary
{
    public function __construct(
        /** Number of compliant devices */
        public ?float $compliantDeviceCount = null,
        /** Number of conflict devices */
        public ?float $conflictDeviceCount = null,
        /** Number of error devices */
        public ?float $errorDeviceCount = null,
        /** Number of NonCompliant devices */
        public ?float $nonCompliantDeviceCount = null,
        /** Number of not applicable devices */
        public ?float $notApplicableDeviceCount = null,
        /** Number of remediated devices */
        public ?float $remediatedDeviceCount = null,
        /** Number of unknown devices */
        public ?string $unknownDeviceCount = null
    ) {}
}
