<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyAuthenticationContextRule
 */
class UnifiedRoleManagementPolicyAuthenticationContextRule
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Defines details of scope that''s targeted by role management policy rule. The details can include the principal type, the role assignment type, and actions affecting a role. Supports $filter (eq, ne). */
        public ?string $target = null,
        /** The value of the authentication context claim. */
        public ?string $claimValue = null,
        /** Determines whether this rule is enabled. */
        public ?string $isEnabled = null
    ) {}
}
