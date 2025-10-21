<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodModeDetail
 */
class AuthenticationMethodModeDetail
{
    public function __construct(
        /**  */
        public ?string $authenticationMethod = null,
        /** The display name of this mode */
        public ?string $displayName = null
    ) {}
}
