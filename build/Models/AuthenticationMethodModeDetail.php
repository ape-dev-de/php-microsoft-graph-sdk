<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodModeDetail
 */
class AuthenticationMethodModeDetail
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?BaseAuthenticationMethod $authenticationMethod = null,
        /** The display name of this mode */
        public ?string $displayName = null
    ) {}
}
