<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetedManagedAppConfiguration
 */
class TargetedManagedAppConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time the policy was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The policy's description. */
        public ?string $description = null,
        /** Policy display name. */
        public ?string $displayName = null,
        /** Last time the policy was modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The ManagedAppPolicy resource represents a base type for platform specific policies. */
        public ?string $version = null,
        /** @var string[] Configuration used to deliver a set of custom settings as-is to apps for users to whom the configuration is scoped */
        public array $customSettings = [],
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
