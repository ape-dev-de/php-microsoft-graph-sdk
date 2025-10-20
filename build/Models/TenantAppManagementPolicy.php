<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TenantAppManagementPolicy
 */
class TenantAppManagementPolicy
{
    /**
     * Restrictions that apply as default to all application objects in the tenant.
     */
    private ?string $applicationRestrictions;

    /**
     * Denotes whether the policy is enabled. Default value is false.
     */
    private ?bool $isEnabled;

    /**
     * Restrictions that apply as default to all service principal objects in the tenant.
     */
    private ?string $servicePrincipalRestrictions;

    public function getApplicationRestrictions(): ?string
    {
        return $this->applicationRestrictions;
    }

    public function setApplicationRestrictions(?string $applicationRestrictions): self
    {
        $this->applicationRestrictions = $applicationRestrictions;
        return $this;
    }

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getServicePrincipalRestrictions(): ?string
    {
        return $this->servicePrincipalRestrictions;
    }

    public function setServicePrincipalRestrictions(?string $servicePrincipalRestrictions): self
    {
        $this->servicePrincipalRestrictions = $servicePrincipalRestrictions;
        return $this;
    }

}
