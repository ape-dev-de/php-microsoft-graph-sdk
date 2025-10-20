<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodsRoot
 */
class AuthenticationMethodsRoot
{
    /**
     * Represents the state of a user''s authentication methods, including which methods are registered and which features the user is registered and capable of (such as multifactor authentication, self-service password reset, and passwordless authentication).
     */
    private ?string $userRegistrationDetails;

    public function getUserRegistrationDetails(): ?string
    {
        return $this->userRegistrationDetails;
    }

    public function setUserRegistrationDetails(?string $userRegistrationDetails): self
    {
        $this->userRegistrationDetails = $userRegistrationDetails;
        return $this;
    }

}
