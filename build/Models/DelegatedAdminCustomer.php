<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminCustomer
 */
class DelegatedAdminCustomer
{
    /**
     * The Microsoft Entra ID display name of the customer tenant. Read-only. Supports $orderby.
     */
    private ?string $displayName;

    /**
     * The Microsoft Entra ID-assigned tenant ID of the customer. Read-only.
     */
    private ?string $tenantId;

    /**
     * Contains the management details of a service in the customer tenant that's managed by delegated administration.
     */
    private ?string $serviceManagementDetails;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
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

    public function getServiceManagementDetails(): ?string
    {
        return $this->serviceManagementDetails;
    }

    public function setServiceManagementDetails(?string $serviceManagementDetails): self
    {
        $this->serviceManagementDetails = $serviceManagementDetails;
        return $this;
    }

}
