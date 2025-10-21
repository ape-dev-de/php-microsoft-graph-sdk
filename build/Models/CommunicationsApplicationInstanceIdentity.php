<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommunicationsApplicationInstanceIdentity
 */
class CommunicationsApplicationInstanceIdentity
{
    /**
     * True if the participant shouldn't be shown in other participants' rosters.
     */
    private ?bool $hidden;

    /**
     * The tenant ID of the application.
     */
    private ?string $tenantId;


    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;
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
