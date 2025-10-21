<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TenantDataSecurityAndGovernance
 */
class TenantDataSecurityAndGovernance
{
    /**
     */
    private ?string $protectionScopes;


    public function getProtectionScopes(): ?string
    {
        return $this->protectionScopes;
    }

    public function setProtectionScopes(?string $protectionScopes): self
    {
        $this->protectionScopes = $protectionScopes;
        return $this;
    }

}
