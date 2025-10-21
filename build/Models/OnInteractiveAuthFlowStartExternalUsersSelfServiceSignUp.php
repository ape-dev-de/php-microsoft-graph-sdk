<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp
 */
class OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp
{
    public function __construct(
        /** Optional. Specifies whether the authentication flow includes an option to sign up (create account) and sign in. Default value is false meaning only sign in is enabled. */
        public ?bool $isSignUpAllowed = null
    ) {}
}
