<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRolePermission
 */
class UnifiedRolePermission
{
    /**
     * Set of tasks that can be performed on a resource. Required.
     */
    private ?string $allowedResourceActions;

    /**
     * Optional constraints that must be met for the permission to be effective. Not supported for custom roles.
     */
    private ?string $condition;

    /**
     * Set of tasks that may not be performed on a resource. Not yet supported.
     */
    private ?string $excludedResourceActions;

    public function getAllowedResourceActions(): ?string
    {
        return $this->allowedResourceActions;
    }

    public function setAllowedResourceActions(?string $allowedResourceActions): self
    {
        $this->allowedResourceActions = $allowedResourceActions;
        return $this;
    }

    public function getCondition(): ?string
    {
        return $this->condition;
    }

    public function setCondition(?string $condition): self
    {
        $this->condition = $condition;
        return $this;
    }

    public function getExcludedResourceActions(): ?string
    {
        return $this->excludedResourceActions;
    }

    public function setExcludedResourceActions(?string $excludedResourceActions): self
    {
        $this->excludedResourceActions = $excludedResourceActions;
        return $this;
    }

}
