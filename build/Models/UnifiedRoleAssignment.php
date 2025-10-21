<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleAssignment
 */
class UnifiedRoleAssignment
{
    /**
     * Identifier of the app specific scope when the assignment scope is app specific. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by a resource application only. For the entitlement management provider, use this property to specify a catalog. For example, /AccessPackageCatalog/beedadfe-01d5-4025-910b-84abb9369997. Supports $filter (eq, in). For example, /roleManagement/entitlementManagement/roleAssignments?$filter=appScopeId eq ''/AccessPackageCatalog/{catalog id}''.
     */
    private ?string $appScopeId;

    /**
     */
    private ?string $condition;

    /**
     * Identifier of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications, unlike app scopes that are defined and understood by a resource application only. Supports $filter (eq, in).
     */
    private ?string $directoryScopeId;

    /**
     * Identifier of the principal to which the assignment is granted. Supported principals are users, role-assignable groups, and service principals. Supports $filter (eq, in).
     */
    private ?string $principalId;

    /**
     * Identifier of the unifiedRoleDefinition the assignment is for. Read-only. Supports $filter (eq, in).
     */
    private ?string $roleDefinitionId;

    /**
     * Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity. Supports $expand for the entitlement provider only.
     */
    private ?string $appScope;

    /**
     * The directory object that is the scope of the assignment. Read-only. Supports $expand for the directory provider.
     */
    private ?string $directoryScope;

    /**
     * Referencing the assigned principal. Read-only. Supports $expand except for the Exchange provider.
     */
    private ?string $principal;

    /**
     * The roleDefinition the assignment is for. Supports $expand.
     */
    private ?string $roleDefinition;


    public function getAppScopeId(): ?string
    {
        return $this->appScopeId;
    }

    public function setAppScopeId(?string $appScopeId): self
    {
        $this->appScopeId = $appScopeId;
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

    public function getDirectoryScopeId(): ?string
    {
        return $this->directoryScopeId;
    }

    public function setDirectoryScopeId(?string $directoryScopeId): self
    {
        $this->directoryScopeId = $directoryScopeId;
        return $this;
    }

    public function getPrincipalId(): ?string
    {
        return $this->principalId;
    }

    public function setPrincipalId(?string $principalId): self
    {
        $this->principalId = $principalId;
        return $this;
    }

    public function getRoleDefinitionId(): ?string
    {
        return $this->roleDefinitionId;
    }

    public function setRoleDefinitionId(?string $roleDefinitionId): self
    {
        $this->roleDefinitionId = $roleDefinitionId;
        return $this;
    }

    public function getAppScope(): ?string
    {
        return $this->appScope;
    }

    public function setAppScope(?string $appScope): self
    {
        $this->appScope = $appScope;
        return $this;
    }

    public function getDirectoryScope(): ?string
    {
        return $this->directoryScope;
    }

    public function setDirectoryScope(?string $directoryScope): self
    {
        $this->directoryScope = $directoryScope;
        return $this;
    }

    public function getPrincipal(): ?string
    {
        return $this->principal;
    }

    public function setPrincipal(?string $principal): self
    {
        $this->principal = $principal;
        return $this;
    }

    public function getRoleDefinition(): ?string
    {
        return $this->roleDefinition;
    }

    public function setRoleDefinition(?string $roleDefinition): self
    {
        $this->roleDefinition = $roleDefinition;
        return $this;
    }

}
