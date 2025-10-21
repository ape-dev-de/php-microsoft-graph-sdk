<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationStrengthUsage
 */
class AuthenticationStrengthUsage
{
    /**
     */
    private array $mfa = [];

    /**
     * @var string[]
     */
    private array $none = [];


    public function getMfa(): array
    {
        return $this->mfa;
    }

    public function setMfa(array $mfa): self
    {
        $this->mfa = $mfa;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getNone(): array
    {
        return $this->none;
    }

    /**
     * @param string[] $none
     */
    public function setNone(array $none): self
    {
        $this->none = $none;
        return $this;
    }

}
