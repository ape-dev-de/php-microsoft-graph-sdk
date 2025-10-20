<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleScheduleBase
 */
class UnifiedRoleScheduleBase
{
    /**
     * Identifier of the app-specific scope when the assignment or eligibility is scoped to an app. The scope of an assignment or eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
     */
    private ?string $appScopeId;

    /**
     * When the schedule was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Identifier of the object through which this schedule was created.
     */
    private ?string $createdUsing;

    /**
     * Identifier of the directory object representing the scope of the assignment or eligibility. The scope of an assignment or eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
     */
    private ?string $directoryScopeId;

    /**
     * When the schedule was last modified.
     */
    private ?\DateTimeInterface $modifiedDateTime;

    /**
     * Identifier of the principal that has been granted the role assignment or eligibility.
     */
    private ?string $principalId;

    /**
     * Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that a principal is eligible for.
     */
    private ?string $roleDefinitionId;

    /**
     * The status of the role assignment or eligibility request.
     */
    private ?string $status;

    /**
     * Read-only property with details of the app-specific scope when the role eligibility or assignment is scoped to an app. Nullable.
     */
    private ?string $appScope;

    /**
     * The directory object that is the scope of the role eligibility or assignment. Read-only.
     */
    private ?string $directoryScope;

    /**
     * The principal that's getting a role assignment or that's eligible for a role through the request.
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

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getCreatedUsing(): ?string
    {
        return $this->createdUsing;
    }

    public function setCreatedUsing(?string $createdUsing): self
    {
        $this->createdUsing = $createdUsing;
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

    public function getModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->modifiedDateTime;
    }

    public function setModifiedDateTime(?\DateTimeInterface $modifiedDateTime): self
    {
        $this->modifiedDateTime = $modifiedDateTime;
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
