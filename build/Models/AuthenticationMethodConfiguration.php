<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodConfiguration
 */
class AuthenticationMethodConfiguration
{
    /**
     * Groups of users that are excluded from a policy.
     */
    private array $excludeTargets = [];

    /**
     * The state of the policy. Possible values are: enabled, disabled.
     */
    private ?string $state;

    public function getExcludeTargets(): array
    {
        return $this->excludeTargets;
    }

    public function setExcludeTargets(array $excludeTargets): self
    {
        $this->excludeTargets = $excludeTargets;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

}
