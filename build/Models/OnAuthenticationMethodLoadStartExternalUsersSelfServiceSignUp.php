<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
 */
class OnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp
{
    /**
     * @var string[]
     */
    private array $identityProviders = [];


    /**
     * @return string[]
     */
    public function getIdentityProviders(): array
    {
        return $this->identityProviders;
    }

    /**
     * @param string[] $identityProviders
     */
    public function setIdentityProviders(array $identityProviders): self
    {
        $this->identityProviders = $identityProviders;
        return $this;
    }

}
