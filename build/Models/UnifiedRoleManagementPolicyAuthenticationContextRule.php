<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyAuthenticationContextRule
 */
class UnifiedRoleManagementPolicyAuthenticationContextRule
{
    /**
     * The value of the authentication context claim.
     */
    private ?string $claimValue;

    /**
     * Determines whether this rule is enabled.
     */
    private ?string $isEnabled;


    public function getClaimValue(): ?string
    {
        return $this->claimValue;
    }

    public function setClaimValue(?string $claimValue): self
    {
        $this->claimValue = $claimValue;
        return $this;
    }

    public function getIsEnabled(): ?string
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?string $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

}
