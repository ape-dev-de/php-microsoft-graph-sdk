<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminAccessDetails
 */
class DelegatedAdminAccessDetails
{
    /**
     * The directory roles that the Microsoft partner is assigned in the customer tenant.
     */
    private ?string $unifiedRoles;

    public function getUnifiedRoles(): ?string
    {
        return $this->unifiedRoles;
    }

    public function setUnifiedRoles(?string $unifiedRoles): self
    {
        $this->unifiedRoles = $unifiedRoles;
        return $this;
    }

}
