<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDeviceOverview
 */
class ManagedDeviceOverview
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Distribution of Exchange Access State in Intune */
        public ?DeviceExchangeAccessStateSummary $deviceExchangeAccessStateSummary = null,
        /** Device operating system summary. */
        public ?DeviceOperatingSystemSummary $deviceOperatingSystemSummary = null,
        /** The number of devices enrolled in both MDM and EAS */
        public ?float $dualEnrolledDeviceCount = null,
        /** Total enrolled device count. Does not include PC devices managed via Intune PC Agent */
        public ?float $enrolledDeviceCount = null,
        /** The number of devices enrolled in MDM */
        public ?float $mdmEnrolledCount = null
    ) {}
}
