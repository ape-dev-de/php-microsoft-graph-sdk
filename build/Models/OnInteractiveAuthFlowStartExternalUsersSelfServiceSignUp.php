<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp
 */
class OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp
{
    /**
     * Optional. Specifies whether the authentication flow includes an option to sign up (create account) and sign in. Default value is false meaning only sign in is enabled.
     */
    private ?string $isSignUpAllowed;


    public function getIsSignUpAllowed(): ?string
    {
        return $this->isSignUpAllowed;
    }

    public function setIsSignUpAllowed(?string $isSignUpAllowed): self
    {
        $this->isSignUpAllowed = $isSignUpAllowed;
        return $this;
    }

}
