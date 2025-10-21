<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceSpecificPermissionGrant
 */
class ResourceSpecificPermissionGrant
{
    /**
     * ID of the service principal of the Microsoft Entra app that has been granted access. Read-only.
     */
    private ?string $clientAppId;

    /**
     * ID of the Microsoft Entra app that has been granted access. Read-only.
     */
    private ?string $clientId;

    /**
     * The name of the resource-specific permission. Read-only.
     */
    private ?string $permission;

    /**
     * The type of permission. Possible values are: Application, Delegated. Read-only.
     */
    private ?string $permissionType;

    /**
     * ID of the Microsoft Entra app that is hosting the resource. Read-only.
     */
    private ?string $resourceAppId;


    public function getClientAppId(): ?string
    {
        return $this->clientAppId;
    }

    public function setClientAppId(?string $clientAppId): self
    {
        $this->clientAppId = $clientAppId;
        return $this;
    }

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function getPermission(): ?string
    {
        return $this->permission;
    }

    public function setPermission(?string $permission): self
    {
        $this->permission = $permission;
        return $this;
    }

    public function getPermissionType(): ?string
    {
        return $this->permissionType;
    }

    public function setPermissionType(?string $permissionType): self
    {
        $this->permissionType = $permissionType;
        return $this;
    }

    public function getResourceAppId(): ?string
    {
        return $this->resourceAppId;
    }

    public function setResourceAppId(?string $resourceAppId): self
    {
        $this->resourceAppId = $resourceAppId;
        return $this;
    }

}
