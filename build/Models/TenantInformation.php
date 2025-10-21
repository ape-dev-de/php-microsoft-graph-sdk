<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TenantInformation
 */
class TenantInformation
{
    /**
     * Primary domain name of a Microsoft Entra tenant.
     */
    private ?string $defaultDomainName;

    /**
     * Display name of a Microsoft Entra tenant.
     */
    private ?string $displayName;

    /**
     * Name shown to users that sign in to a Microsoft Entra tenant.
     */
    private ?string $federationBrandName;

    /**
     * Unique identifier of a Microsoft Entra tenant.
     */
    private ?string $tenantId;


    public function getDefaultDomainName(): ?string
    {
        return $this->defaultDomainName;
    }

    public function setDefaultDomainName(?string $defaultDomainName): self
    {
        $this->defaultDomainName = $defaultDomainName;
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

    public function getFederationBrandName(): ?string
    {
        return $this->federationBrandName;
    }

    public function setFederationBrandName(?string $federationBrandName): self
    {
        $this->federationBrandName = $federationBrandName;
        return $this;
    }

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

}
