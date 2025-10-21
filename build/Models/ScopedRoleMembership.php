<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScopedRoleMembership
 */
class ScopedRoleMembership
{
    /**
     * Unique identifier for the administrative unit that the directory role is scoped to
     */
    private ?string $administrativeUnitId;

    /**
     * Unique identifier for the directory role that the member is in.
     */
    private ?string $roleId;

    /**
     */
    private ?string $roleMemberInfo;


    public function getAdministrativeUnitId(): ?string
    {
        return $this->administrativeUnitId;
    }

    public function setAdministrativeUnitId(?string $administrativeUnitId): self
    {
        $this->administrativeUnitId = $administrativeUnitId;
        return $this;
    }

    public function getRoleId(): ?string
    {
        return $this->roleId;
    }

    public function setRoleId(?string $roleId): self
    {
        $this->roleId = $roleId;
        return $this;
    }

    public function getRoleMemberInfo(): ?string
    {
        return $this->roleMemberInfo;
    }

    public function setRoleMemberInfo(?string $roleMemberInfo): self
    {
        $this->roleMemberInfo = $roleMemberInfo;
        return $this;
    }

}
