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
     * @var string[]
     */
    private array $unifiedRoles = [];


    /**
     * @return string[]
     */
    public function getUnifiedRoles(): array
    {
        return $this->unifiedRoles;
    }

    /**
     * @param string[] $unifiedRoles
     */
    public function setUnifiedRoles(array $unifiedRoles): self
    {
        $this->unifiedRoles = $unifiedRoles;
        return $this;
    }

}
