<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyExpirationRule
 */
class UnifiedRoleManagementPolicyExpirationRule
{
    /**
     * Indicates whether expiration is required or if it's a permanently active assignment or eligibility.
     */
    private ?bool $isExpirationRequired;

    /**
     * The maximum duration allowed for eligibility or assignment that isn't permanent. Required when isExpirationRequired is true.
     */
    private ?string $maximumDuration;

    public function getIsExpirationRequired(): ?bool
    {
        return $this->isExpirationRequired;
    }

    public function setIsExpirationRequired(?bool $isExpirationRequired): self
    {
        $this->isExpirationRequired = $isExpirationRequired;
        return $this;
    }

    public function getMaximumDuration(): ?string
    {
        return $this->maximumDuration;
    }

    public function setMaximumDuration(?string $maximumDuration): self
    {
        $this->maximumDuration = $maximumDuration;
        return $this;
    }

}
