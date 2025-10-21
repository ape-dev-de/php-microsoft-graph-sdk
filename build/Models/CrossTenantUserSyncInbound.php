<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantUserSyncInbound
 */
class CrossTenantUserSyncInbound
{
    /**
     * Defines whether user objects should be synchronized from the partner tenant. false causes any current user synchronization from the source tenant to the target tenant to stop. This property has no impact on existing users who have already been synchronized.
     */
    private ?string $isSyncAllowed;


    public function getIsSyncAllowed(): ?string
    {
        return $this->isSyncAllowed;
    }

    public function setIsSyncAllowed(?string $isSyncAllowed): self
    {
        $this->isSyncAllowed = $isSyncAllowed;
        return $this;
    }

}
