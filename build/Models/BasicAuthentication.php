<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BasicAuthentication
 */
class BasicAuthentication
{
    /**
     * The password. It isn't returned in the responses.
     */
    private ?string $password;

    /**
     * The username.
     */
    private ?string $username;

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;
        return $this;
    }

}
