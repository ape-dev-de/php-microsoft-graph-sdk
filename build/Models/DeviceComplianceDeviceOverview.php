<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceDeviceOverview
 */
class DeviceComplianceDeviceOverview
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Version of the policy for that overview */
        public ?float $configurationVersion = null,
        /** Number of error devices */
        public ?float $errorCount = null,
        /** Number of failed devices */
        public ?float $failedCount = null,
        /** Last update time */
        public ?\DateTimeInterface $lastUpdateDateTime = null,
        /** Number of not applicable devices */
        public ?float $notApplicableCount = null,
        /** Number of pending devices */
        public ?float $pendingCount = null,
        /** Number of succeeded devices */
        public ?string $successCount = null
    ) {}
}
