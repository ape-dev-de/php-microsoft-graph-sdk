<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyTenantScope
 */
class PolicyTenantScope
{
    /**
     * Specifies the users and groups included in or excluded from this tenant-level policy scope.
     */
    private ?string $policyScope;

    public function getPolicyScope(): ?string
    {
        return $this->policyScope;
    }

    public function setPolicyScope(?string $policyScope): self
    {
        $this->policyScope = $policyScope;
        return $this;
    }

}
