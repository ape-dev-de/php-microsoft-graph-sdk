<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityServicePrincipalEvidence
 */
class SecurityServicePrincipalEvidence
{
    /**
     */
    private ?string $appId;

    /**
     */
    private ?string $appOwnerTenantId;

    /**
     */
    private ?string $servicePrincipalName;

    /**
     */
    private ?string $servicePrincipalObjectId;

    /**
     */
    private ?string $servicePrincipalType;

    /**
     */
    private ?string $tenantId;


    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function getAppOwnerTenantId(): ?string
    {
        return $this->appOwnerTenantId;
    }

    public function setAppOwnerTenantId(?string $appOwnerTenantId): self
    {
        $this->appOwnerTenantId = $appOwnerTenantId;
        return $this;
    }

    public function getServicePrincipalName(): ?string
    {
        return $this->servicePrincipalName;
    }

    public function setServicePrincipalName(?string $servicePrincipalName): self
    {
        $this->servicePrincipalName = $servicePrincipalName;
        return $this;
    }

    public function getServicePrincipalObjectId(): ?string
    {
        return $this->servicePrincipalObjectId;
    }

    public function setServicePrincipalObjectId(?string $servicePrincipalObjectId): self
    {
        $this->servicePrincipalObjectId = $servicePrincipalObjectId;
        return $this;
    }

    public function getServicePrincipalType(): ?string
    {
        return $this->servicePrincipalType;
    }

    public function setServicePrincipalType(?string $servicePrincipalType): self
    {
        $this->servicePrincipalType = $servicePrincipalType;
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
