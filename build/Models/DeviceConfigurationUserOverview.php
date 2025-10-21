<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationUserOverview
 */
class DeviceConfigurationUserOverview
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Version of the policy for that overview */
        public ?float $configurationVersion = null,
        /** Number of error Users */
        public ?float $errorCount = null,
        /** Number of failed Users */
        public ?float $failedCount = null,
        /** Last update time */
        public ?\DateTimeInterface $lastUpdateDateTime = null,
        /** Number of not applicable users */
        public ?float $notApplicableCount = null,
        /** Number of pending Users */
        public ?float $pendingCount = null,
        /** Number of succeeded Users */
        public ?string $successCount = null
    ) {}
}
