<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantIdentitySyncPolicyPartner
 */
class CrossTenantIdentitySyncPolicyPartner
{
    /**
     * Display name for the cross-tenant user synchronization policy. Use the name of the partner Microsoft Entra tenant to easily identify the policy. Optional.
     */
    private ?string $displayName;

    /**
     * Tenant identifier for the partner Microsoft Entra organization. Read-only.
     */
    private ?string $tenantId;

    /**
     * Defines whether users can be synchronized from the partner tenant. Key.
     */
    private ?string $userSyncInbound;


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

    public function getUserSyncInbound(): ?string
    {
        return $this->userSyncInbound;
    }

    public function setUserSyncInbound(?string $userSyncInbound): self
    {
        $this->userSyncInbound = $userSyncInbound;
        return $this;
    }

}
