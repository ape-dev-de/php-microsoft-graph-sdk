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
     * @var string[]
     */
    private array $resourceActions = [];


    /**
     * @return string[]
     */
    public function getResourceActions(): array
    {
        return $this->resourceActions;
    }

    /**
     * @param string[] $resourceActions
     */
    public function setResourceActions(array $resourceActions): self
    {
        $this->resourceActions = $resourceActions;
        return $this;
    }

}
