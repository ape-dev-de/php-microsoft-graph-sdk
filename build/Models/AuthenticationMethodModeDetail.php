<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodModeDetail
 */
class AuthenticationMethodModeDetail
{
    /**
     */
    private ?string $authenticationMethod;

    /**
     * The display name of this mode
     */
    private ?string $displayName;


    public function getAuthenticationMethod(): ?string
    {
        return $this->authenticationMethod;
    }

    public function setAuthenticationMethod(?string $authenticationMethod): self
    {
        $this->authenticationMethod = $authenticationMethod;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

}
