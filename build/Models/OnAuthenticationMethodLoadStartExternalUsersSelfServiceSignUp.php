<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
 */
class OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
{
    /**
     */
    private ?string $identityProviders;

    public function getIdentityProviders(): ?string
    {
        return $this->identityProviders;
    }

    public function setIdentityProviders(?string $identityProviders): self
    {
        $this->identityProviders = $identityProviders;
        return $this;
    }

}
