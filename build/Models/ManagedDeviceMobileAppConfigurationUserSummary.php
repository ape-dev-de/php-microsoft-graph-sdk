<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDeviceMobileAppConfigurationUserSummary
 */
class ManagedDeviceMobileAppConfigurationUserSummary
{
    public function __construct(
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
        /** Contains properties, inherited properties and actions for an MDM mobile app configuration user status summary. */
        public ?string $successCount = null
    ) {}
}
