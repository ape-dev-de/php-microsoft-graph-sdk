<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyAuthenticationContextRule
 */
class UnifiedRoleManagementPolicyAuthenticationContextRule
{
    public function __construct(
        /** The value of the authentication context claim. */
        public ?string $claimValue = null,
        /** Determines whether this rule is enabled. */
        public ?string $isEnabled = null
    ) {}
}
