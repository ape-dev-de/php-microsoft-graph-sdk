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
        /** Version of the entity. */
        public ?string $version = null,
        /** A set of string key and string value pairs to be sent to apps for users to whom the configuration is scoped, unalterned by this service */
        public array $customSettings = [],
        /** Count of apps to which the current policy is deployed. */
        public ?float $deployedAppCount = null,
        /** Indicates if the policy is deployed to any inclusion groups or not. */
        public ?bool $isAssigned = null,
        /** List of apps to which the policy is deployed. */
        public array $apps = [],
        /** Navigation property to list of inclusion and exclusion groups to which the policy is deployed. */
        public array $assignments = [],
        /** Navigation property to deployment summary of the configuration. */
        public ?ManagedAppPolicyDeploymentSummary $deploymentSummary = null
    ) {}
}
