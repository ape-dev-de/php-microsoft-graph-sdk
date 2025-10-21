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
     * @var string[]
     */
    private array $allowedResourceActions = [];

    /**
     * Optional constraints that must be met for the permission to be effective. Not supported for custom roles.
     */
    private ?string $condition;

    /**
     * Set of tasks that may not be performed on a resource. Not yet supported.
     * @var string[]
     */
    private array $excludedResourceActions = [];


    /**
     * @return string[]
     */
    public function getAllowedResourceActions(): array
    {
        return $this->allowedResourceActions;
    }

    /**
     * @param string[] $allowedResourceActions
     */
    public function setAllowedResourceActions(array $allowedResourceActions): self
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

    /**
     * @return string[]
     */
    public function getExcludedResourceActions(): array
    {
        return $this->excludedResourceActions;
    }

    /**
     * @param string[] $excludedResourceActions
     */
    public function setExcludedResourceActions(array $excludedResourceActions): self
    {
        $this->excludedResourceActions = $excludedResourceActions;
        return $this;
    }

}
