<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthContext
 */
class AuthContext
{
    /**
     * Supported values are c1 through c99.
     */
    private ?string $authenticationContextValue;

    public function getAuthenticationContextValue(): ?string
    {
        return $this->authenticationContextValue;
    }

    public function setAuthenticationContextValue(?string $authenticationContextValue): self
    {
        $this->authenticationContextValue = $authenticationContextValue;
        return $this;
    }

}
