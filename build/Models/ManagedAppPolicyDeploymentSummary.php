<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppPolicyDeploymentSummary
 */
class ManagedAppPolicyDeploymentSummary
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Not yet documented */
        public ?float $configurationDeployedUserCount = null,
        /** Not yet documented */
        public array $configurationDeploymentSummaryPerApp = [],
        /** Not yet documented */
        public ?string $displayName = null,
        /** Not yet documented */
        public ?\DateTimeInterface $lastRefreshTime = null,
        /** The ManagedAppEntity is the base entity type for all other entity types under app management workflow. */
        public ?string $version = null
    ) {}
}
