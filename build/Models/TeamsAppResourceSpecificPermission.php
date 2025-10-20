<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppResourceSpecificPermission
 */
class TeamsAppResourceSpecificPermission
{
    /**
     * The type of resource-specific permission.
     */
    private ?string $permissionType;

    /**
     * The name of the resource-specific permission.
     */
    private ?string $permissionValue;

    public function getPermissionType(): ?string
    {
        return $this->permissionType;
    }

    public function setPermissionType(?string $permissionType): self
    {
        $this->permissionType = $permissionType;
        return $this;
    }

    public function getPermissionValue(): ?string
    {
        return $this->permissionValue;
    }

    public function setPermissionValue(?string $permissionValue): self
    {
        $this->permissionValue = $permissionValue;
        return $this;
    }

}
