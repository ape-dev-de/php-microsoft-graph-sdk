<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRole
 */
class UnifiedRole
{
    /**
     * The unified role definition ID of the directory role. Refer to unifiedRoleDefinition resource.
     */
    private ?string $roleDefinitionId;


    public function getRoleDefinitionId(): ?string
    {
        return $this->roleDefinitionId;
    }

    public function setRoleDefinitionId(?string $roleDefinitionId): self
    {
        $this->roleDefinitionId = $roleDefinitionId;
        return $this;
    }

}
