<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RolePermission
 */
class RolePermission
{
    /**
     * Contains the set of ResourceActions determining the allowed and not allowed permissions for each role.
     */
    private ?string $resourceActions;

    public function getResourceActions(): ?string
    {
        return $this->resourceActions;
    }

    public function setResourceActions(?string $resourceActions): self
    {
        $this->resourceActions = $resourceActions;
        return $this;
    }

}
