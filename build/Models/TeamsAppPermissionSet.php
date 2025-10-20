<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppPermissionSet
 */
class TeamsAppPermissionSet
{
    /**
     * A collection of resource-specific permissions.
     */
    private ?string $resourceSpecificPermissions;

    public function getResourceSpecificPermissions(): ?string
    {
        return $this->resourceSpecificPermissions;
    }

    public function setResourceSpecificPermissions(?string $resourceSpecificPermissions): self
    {
        $this->resourceSpecificPermissions = $resourceSpecificPermissions;
        return $this;
    }

}
