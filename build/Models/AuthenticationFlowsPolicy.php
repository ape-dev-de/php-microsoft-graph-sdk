<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationFlowsPolicy
 */
class AuthenticationFlowsPolicy
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Inherited property. A description of the policy. Optional. Read-only. */
        public ?string $description = null,
        /** Inherited property. The human-readable name of the policy. Optional. Read-only. */
        public ?string $displayName = null,
        /** Contains selfServiceSignUpAuthenticationFlowConfiguration settings that convey whether self-service sign-up is enabled or disabled. Optional. Read-only. */
        public ?string $selfServiceSignUp = null
    ) {}
}
