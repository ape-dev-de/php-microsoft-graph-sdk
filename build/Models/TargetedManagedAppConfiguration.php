<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetedManagedAppConfiguration
 */
class TargetedManagedAppConfiguration
{
    public function __construct(
        /** Count of apps to which the current policy is deployed. */
        public ?float $deployedAppCount = null,
        /** Indicates if the policy is deployed to any inclusion groups or not. */
        public ?bool $isAssigned = null,
        /** List of apps to which the policy is deployed. */
        public array $apps = [],
        /** Navigation property to list of inclusion and exclusion groups to which the policy is deployed. */
        public array $assignments = [],
        /** Configuration used to deliver a set of custom settings as-is to all users in the targeted security group */
        public ?string $deploymentSummary = null
    ) {}
}
