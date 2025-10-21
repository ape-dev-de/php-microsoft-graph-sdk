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
     * @var string[]
     */
    private array $resourceSpecificPermissions = [];


    /**
     * @return string[]
     */
    public function getResourceSpecificPermissions(): array
    {
        return $this->resourceSpecificPermissions;
    }

    /**
     * @param string[] $resourceSpecificPermissions
     */
    public function setResourceSpecificPermissions(array $resourceSpecificPermissions): self
    {
        $this->resourceSpecificPermissions = $resourceSpecificPermissions;
        return $this;
    }

}
