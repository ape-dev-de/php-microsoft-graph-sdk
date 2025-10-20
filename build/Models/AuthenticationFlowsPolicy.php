<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationFlowsPolicy
 */
class AuthenticationFlowsPolicy
{
    /**
     * Inherited property. A description of the policy. Optional. Read-only.
     */
    private ?string $description;

    /**
     * Inherited property. The human-readable name of the policy. Optional. Read-only.
     */
    private ?string $displayName;

    /**
     * Contains selfServiceSignUpAuthenticationFlowConfiguration settings that convey whether self-service sign-up is enabled or disabled. Optional. Read-only.
     */
    private ?string $selfServiceSignUp;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getSelfServiceSignUp(): ?string
    {
        return $this->selfServiceSignUp;
    }

    public function setSelfServiceSignUp(?string $selfServiceSignUp): self
    {
        $this->selfServiceSignUp = $selfServiceSignUp;
        return $this;
    }

}
