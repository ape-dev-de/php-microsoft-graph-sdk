<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationMethodCount
 */
class UserRegistrationMethodCount
{
    /**
     * Name of the authentication method.
     */
    private ?string $authenticationMethod;

    /**
     * Number of users registered.
     */
    private ?string $userCount;


    public function getAuthenticationMethod(): ?string
    {
        return $this->authenticationMethod;
    }

    public function setAuthenticationMethod(?string $authenticationMethod): self
    {
        $this->authenticationMethod = $authenticationMethod;
        return $this;
    }

    public function getUserCount(): ?string
    {
        return $this->userCount;
    }

    public function setUserCount(?string $userCount): self
    {
        $this->userCount = $userCount;
        return $this;
    }

}
