<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAuthenticatorAuthenticationMethodTarget
 */
class MicrosoftAuthenticatorAuthenticationMethodTarget
{
    /**
     */
    private ?string $authenticationMode;


    public function getAuthenticationMode(): ?string
    {
        return $this->authenticationMode;
    }

    public function setAuthenticationMode(?string $authenticationMode): self
    {
        $this->authenticationMode = $authenticationMode;
        return $this;
    }

}
