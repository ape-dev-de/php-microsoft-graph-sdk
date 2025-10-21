<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BuiltInIdentityProvider
 */
class BuiltInIdentityProvider
{
    /**
     * The identity provider type. For a B2B scenario, possible values: AADSignup, MicrosoftAccount, EmailOTP. Required.
     */
    private ?string $identityProviderType;


    public function getIdentityProviderType(): ?string
    {
        return $this->identityProviderType;
    }

    public function setIdentityProviderType(?string $identityProviderType): self
    {
        $this->identityProviderType = $identityProviderType;
        return $this;
    }

}
