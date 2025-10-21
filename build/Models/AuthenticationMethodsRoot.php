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
     * @var string[]
     */
    private array $userRegistrationDetails = [];


    /**
     * @return string[]
     */
    public function getUserRegistrationDetails(): array
    {
        return $this->userRegistrationDetails;
    }

    /**
     * @param string[] $userRegistrationDetails
     */
    public function setUserRegistrationDetails(array $userRegistrationDetails): self
    {
        $this->userRegistrationDetails = $userRegistrationDetails;
        return $this;
    }

}
