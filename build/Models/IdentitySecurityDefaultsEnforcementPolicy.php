<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentitySecurityDefaultsEnforcementPolicy
 */
class IdentitySecurityDefaultsEnforcementPolicy
{
    /**
     * If set to true, Microsoft Entra security defaults are enabled for the tenant.
     */
    private ?string $isEnabled;

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
