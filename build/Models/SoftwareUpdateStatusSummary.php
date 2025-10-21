<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SoftwareUpdateStatusSummary
 */
class SoftwareUpdateStatusSummary
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Number of compliant devices. */
        public ?float $compliantDeviceCount = null,
        /** Number of compliant users. */
        public ?float $compliantUserCount = null,
        /** Number of conflict devices. */
        public ?float $conflictDeviceCount = null,
        /** Number of conflict users. */
        public ?float $conflictUserCount = null,
        /** The name of the policy. */
        public ?string $displayName = null,
        /** Number of devices had error. */
        public ?float $errorDeviceCount = null,
        /** Number of users had error. */
        public ?float $errorUserCount = null,
        /** Number of non compliant devices. */
        public ?float $nonCompliantDeviceCount = null,
        /** Number of non compliant users. */
        public ?float $nonCompliantUserCount = null,
        /** Number of not applicable devices. */
        public ?float $notApplicableDeviceCount = null,
        /** Number of not applicable users. */
        public ?float $notApplicableUserCount = null,
        /** Number of remediated devices. */
        public ?float $remediatedDeviceCount = null,
        /** Number of remediated users. */
        public ?float $remediatedUserCount = null,
        /** Number of unknown devices. */
        public ?float $unknownDeviceCount = null,
        /** Number of unknown users. */
        public ?string $unknownUserCount = null
    ) {}
}
