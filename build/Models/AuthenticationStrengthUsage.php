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
     */
    private ?string $none;

    public function getMfa(): array
    {
        return $this->mfa;
    }

    public function setMfa(array $mfa): self
    {
        $this->mfa = $mfa;
        return $this;
    }

    public function getNone(): ?string
    {
        return $this->none;
    }

    public function setNone(?string $none): self
    {
        $this->none = $none;
        return $this;
    }

}
