<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoleManagement
 */
class RoleManagement
{
    /**
     */
    private ?string $directory;

    /**
     * Container for roles and assignments for entitlement management resources.
     */
    private ?string $entitlementManagement;

    public function getDirectory(): ?string
    {
        return $this->directory;
    }

    public function setDirectory(?string $directory): self
    {
        $this->directory = $directory;
        return $this;
    }

    public function getEntitlementManagement(): ?string
    {
        return $this->entitlementManagement;
    }

    public function setEntitlementManagement(?string $entitlementManagement): self
    {
        $this->entitlementManagement = $entitlementManagement;
        return $this;
    }

}
