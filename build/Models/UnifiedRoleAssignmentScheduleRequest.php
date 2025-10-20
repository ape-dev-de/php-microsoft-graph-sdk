<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleAssignmentScheduleRequest
 */
class UnifiedRoleAssignmentScheduleRequest
{
    /**
     * Represents the type of the operation on the role assignment request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew, selfExtend, selfRenew, unknownFutureValue. adminAssign: For administrators to assign roles to principals.adminRemove: For administrators to remove principals from roles. adminUpdate: For administrators to change existing role assignments.adminExtend: For administrators to extend expiring assignments.adminRenew: For administrators to renew expired assignments.selfActivate: For principals to activate their assignments.selfDeactivate: For principals to deactivate their active assignments.selfExtend: For principals to request to extend their expiring assignments.selfRenew: For principals to request to renew their expired assignments.
     */
    private ?string $action;

    /**
     * Identifier of the app-specific scope when the assignment is scoped to an app. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. Supports $filter (eq, ne, and on null values).
     */
    private ?string $appScopeId;

    /**
     * Identifier of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. Supports $filter (eq, ne, and on null values).
     */
    private ?string $directoryScopeId;

    /**
     * Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
     */
    private ?bool $isValidationOnly;

    /**
     * A message provided by users and administrators when create they create the unifiedRoleAssignmentScheduleRequest object.
     */
    private ?string $justification;

    /**
     * Identifier of the principal that has been granted the assignment. Can be a user, role-assignable group, or a service principal. Supports $filter (eq, ne).
     */
    private ?string $principalId;

    /**
     * Identifier of the unifiedRoleDefinition object that is being assigned to the principal. Supports $filter (eq, ne).
     */
    private ?string $roleDefinitionId;

    /**
     * The period of the role assignment. Recurring schedules are currently unsupported.
     */
    private ?string $scheduleInfo;

    /**
     * Identifier of the schedule object that''s linked to the assignment request. Supports $filter (eq, ne).
     */
    private ?string $targetScheduleId;

    /**
     * Ticket details linked to the role assignment request including details of the ticket number and ticket system.
     */
    private ?string $ticketInfo;

    /**
     * If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. Otherwise, it''s null. Supports $expand and $select nested in $expand.
     */
    private ?string $activatedUsing;

    /**
     * Read-only property with details of the app-specific scope when the assignment is scoped to an app. Nullable. Supports $expand.
     */
    private ?string $appScope;

    /**
     * The directory object that is the scope of the assignment. Read-only. Supports $expand.
     */
    private ?string $directoryScope;

    /**
     * The principal that's getting a role assignment through the request. Supports $expand and $select nested in $expand for id only.
     */
    private ?string $principal;

    /**
     * Detailed information for the unifiedRoleDefinition object that is referenced through the roleDefinitionId property. Supports $expand and $select nested in $expand.
     */
    private ?string $roleDefinition;

    /**
     * The schedule for an eligible role assignment that is referenced through the targetScheduleId property. Supports $expand and $select nested in $expand.
     */
    private ?string $targetSchedule;

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->action = $action;
        return $this;
    }

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

    public function getIsValidationOnly(): ?bool
    {
        return $this->isValidationOnly;
    }

    public function setIsValidationOnly(?bool $isValidationOnly): self
    {
        $this->isValidationOnly = $isValidationOnly;
        return $this;
    }

    public function getJustification(): ?string
    {
        return $this->justification;
    }

    public function setJustification(?string $justification): self
    {
        $this->justification = $justification;
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

    public function getScheduleInfo(): ?string
    {
        return $this->scheduleInfo;
    }

    public function setScheduleInfo(?string $scheduleInfo): self
    {
        $this->scheduleInfo = $scheduleInfo;
        return $this;
    }

    public function getTargetScheduleId(): ?string
    {
        return $this->targetScheduleId;
    }

    public function setTargetScheduleId(?string $targetScheduleId): self
    {
        $this->targetScheduleId = $targetScheduleId;
        return $this;
    }

    public function getTicketInfo(): ?string
    {
        return $this->ticketInfo;
    }

    public function setTicketInfo(?string $ticketInfo): self
    {
        $this->ticketInfo = $ticketInfo;
        return $this;
    }

    public function getActivatedUsing(): ?string
    {
        return $this->activatedUsing;
    }

    public function setActivatedUsing(?string $activatedUsing): self
    {
        $this->activatedUsing = $activatedUsing;
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

    public function getTargetSchedule(): ?string
    {
        return $this->targetSchedule;
    }

    public function setTargetSchedule(?string $targetSchedule): self
    {
        $this->targetSchedule = $targetSchedule;
        return $this;
    }

}
