<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureActiveDirectoryTenant
 */
class AzureActiveDirectoryTenant
{
    /**
     * The name of the Microsoft Entra tenant. Read only.
     */
    private ?string $displayName;

    /**
     * The ID of the Microsoft Entra tenant. Read only.
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
