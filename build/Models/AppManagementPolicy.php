<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppManagementPolicy
 */
class AppManagementPolicy
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** Description for this policy. Required. */
        public ?string $description = null,
        /** Display name for this policy. Required. */
        public ?string $displayName = null,
        /** Denotes whether the policy is enabled. */
        public ?bool $isEnabled = null,
        /** Restrictions that apply to an application or service principal object. */
        public ?CustomAppManagementConfiguration $restrictions = null,
        /** Collection of applications and service principals to which the policy is applied. */
        public array $appliesTo = []
    ) {}
}
