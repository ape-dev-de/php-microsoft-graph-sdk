<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FeatureRolloutPolicy
 */
class FeatureRolloutPolicy
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** A description for this feature rollout policy. */
        public ?string $description = null,
        /** The display name for this  feature rollout policy. */
        public ?string $displayName = null,
        /**  */
        public ?string $feature = null,
        /** Indicates whether this feature rollout policy should be applied to the entire organization. */
        public ?bool $isAppliedToOrganization = null,
        /** Indicates whether the feature rollout is enabled. */
        public ?bool $isEnabled = null,
        /** @var string[] Nullable. Specifies a list of directoryObject resources that feature is enabled for. */
        public array $appliesTo = []
    ) {}
}
