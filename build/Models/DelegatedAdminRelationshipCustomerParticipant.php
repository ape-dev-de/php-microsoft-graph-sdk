<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationshipCustomerParticipant
 */
class DelegatedAdminRelationshipCustomerParticipant
{
    /**
     * The display name of the customer tenant as set by Microsoft Entra ID. Read-only
     */
    private ?string $displayName;

    /**
     * The Microsoft Entra ID-assigned tenant ID of the customer tenant.
     */
    private ?string $tenantId;

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

}
