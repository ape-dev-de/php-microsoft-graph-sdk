<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentitySecurityDefaultsEnforcementPolicy
 */
class IdentitySecurityDefaultsEnforcementPolicy
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
        /** If set to true, Microsoft Entra security defaults are enabled for the tenant. */
        public ?bool $isEnabled = null
    ) {}
}
