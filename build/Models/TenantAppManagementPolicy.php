<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TenantAppManagementPolicy
 */
class TenantAppManagementPolicy
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
        /** Restrictions that apply as default to all application objects in the tenant. */
        public ?string $applicationRestrictions = null,
        /** Denotes whether the policy is enabled. Default value is false. */
        public ?bool $isEnabled = null,
        /** Restrictions that apply as default to all service principal objects in the tenant. */
        public ?string $servicePrincipalRestrictions = null
    ) {}
}
