<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommunicationsUserIdentity
 */
class CommunicationsUserIdentity
{
    /**
     * The user's tenant ID.
     */
    private ?string $tenantId;

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
