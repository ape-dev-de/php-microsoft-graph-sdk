<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppPolicyDeploymentSummaryPerApp
 */
class ManagedAppPolicyDeploymentSummaryPerApp
{
    public function __construct(
        /** Number of users the policy is applied. */
        public ?float $configurationAppliedUserCount = null,
        /** Represents policy deployment summary per app. */
        public ?string $mobileAppIdentifier = null
    ) {}
}
