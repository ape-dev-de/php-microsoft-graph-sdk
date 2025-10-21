<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoleDefinition
 */
class RoleDefinition
{
    /**
     * Description of the Role definition.
     */
    private ?string $description;

    /**
     * Display Name of the Role definition.
     */
    private ?string $displayName;

    /**
     * Type of Role. Set to True if it is built-in, or set to False if it is a custom role definition.
     */
    private ?bool $isBuiltIn;

    /**
     * List of Role Permissions this role is allowed to perform. These must match the actionName that is defined as part of the rolePermission.
     */
    private array $rolePermissions = [];

    /**
     * The Role Definition resource. The role definition is the foundation of role based access in Intune. The role combines an Intune resource such as a Mobile App and associated role permissions such as Create or Read for the resource. There are two types of roles, built-in and custom. Built-in roles cannot be modified. Both built-in roles and custom roles must have assignments to be enforced. Create custom roles if you want to define a role that allows any of the available resources and role permissions to be combined into a single role.
     * @var string[]
     */
    private array $roleAssignments = [];


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIsBuiltIn(): ?bool
    {
        return $this->isBuiltIn;
    }

    public function setIsBuiltIn(?bool $isBuiltIn): self
    {
        $this->isBuiltIn = $isBuiltIn;
        return $this;
    }

    public function getRolePermissions(): array
    {
        return $this->rolePermissions;
    }

    public function setRolePermissions(array $rolePermissions): self
    {
        $this->rolePermissions = $rolePermissions;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRoleAssignments(): array
    {
        return $this->roleAssignments;
    }

    /**
     * @param string[] $roleAssignments
     */
    public function setRoleAssignments(array $roleAssignments): self
    {
        $this->roleAssignments = $roleAssignments;
        return $this;
    }

}
