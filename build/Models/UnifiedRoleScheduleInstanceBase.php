<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleScheduleInstanceBase
 */
class UnifiedRoleScheduleInstanceBase
{
    /**
     * Identifier of the app-specific scope when the assignment or role eligibility is scoped to an app. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
     */
    private ?string $appScopeId;

    /**
     * Identifier of the directory object representing the scope of the assignment or role eligibility. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
     */
    private ?string $directoryScopeId;

    /**
     * Identifier of the principal that has been granted the role assignment or that's eligible for a role.
     */
    private ?string $principalId;

    /**
     * Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that the principal is eligible for.
     */
    private ?string $roleDefinitionId;

    /**
     * Read-only property with details of the app-specific scope when the assignment or role eligibility is scoped to an app. Nullable.
     */
    private ?string $appScope;

    /**
     * The directory object that is the scope of the assignment or role eligibility. Read-only.
     */
    private ?string $directoryScope;

    /**
     * The principal that's getting a role assignment or role eligibility through the request.
     */
    private ?string $principal;

    /**
     * Detailed information for the roleDefinition object that is referenced through the roleDefinitionId property.
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
