<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InstanceResourceAccess
 */
class InstanceResourceAccess
{
    /**
     */
    private array $permissions = [];

    /**
     */
    private ?string $resourceAppId;

    public function getPermissions(): array
    {
        return $this->permissions;
    }

    public function setPermissions(array $permissions): self
    {
        $this->permissions = $permissions;
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
