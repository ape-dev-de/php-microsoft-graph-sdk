<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleEligibilityScheduleRequest
 */
class UnifiedRoleEligibilityScheduleRequest
{
    /**
     * Represents the type of operation on the role eligibility request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew, selfExtend, selfRenew, unknownFutureValue. adminAssign: For administrators to assign eligible roles to principals.adminRemove: For administrators to remove eligible roles from principals. adminUpdate: For administrators to change existing role eligibilities.adminExtend: For administrators to extend expiring role eligibilities.adminRenew: For administrators to renew expired eligibilities.selfActivate: For users to activate their assignments.selfDeactivate: For users to deactivate their active assignments.selfExtend: For users to request to extend their expiring assignments.selfRenew: For users to request to renew their expired assignments.
     */
    private ?string $action;

    /**
     * Identifier of the app-specific scope when the role eligibility is scoped to an app. The scope of a role eligibility determines the set of resources for which the principal is eligible to access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. Supports $filter (eq, ne, and on null values).
     */
    private ?string $appScopeId;

    /**
     * Identifier of the directory object representing the scope of the role eligibility. The scope of a role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. Supports $filter (eq, ne, and on null values).
     */
    private ?string $directoryScopeId;

    /**
     * Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
     */
    private ?bool $isValidationOnly;

    /**
     * A message provided by users and administrators when create they create the unifiedRoleEligibilityScheduleRequest object.
     */
    private ?string $justification;

    /**
     * Identifier of the principal that has been granted the role eligibility. Can be a user or a role-assignable group. You can grant only active assignments service principals.Supports $filter (eq, ne).
     */
    private ?string $principalId;

    /**
     * Identifier of the unifiedRoleDefinition object that is being assigned to the principal. Supports $filter (eq, ne).
     */
    private ?string $roleDefinitionId;

    /**
     * The period of the role eligibility. Recurring schedules are currently unsupported.
     */
    private ?string $scheduleInfo;

    /**
     * Identifier of the schedule object that''s linked to the eligibility request. Supports $filter (eq, ne).
     */
    private ?string $targetScheduleId;

    /**
     * Ticket details linked to the role eligibility request including details of the ticket number and ticket system. Optional.
     */
    private ?string $ticketInfo;

    /**
     * Read-only property with details of the app-specific scope when the role eligibility is scoped to an app. Nullable. Supports $expand.
     */
    private ?string $appScope;

    /**
     * The directory object that is the scope of the role eligibility. Read-only. Supports $expand.
     */
    private ?string $directoryScope;

    /**
     * The principal that's getting a role eligibility through the request. Supports $expand.
     */
    private ?string $principal;

    /**
     * Detailed information for the unifiedRoleDefinition object that is referenced through the roleDefinitionId property. Supports $expand.
     */
    private ?string $roleDefinition;

    /**
     * The schedule for a role eligibility that is referenced through the targetScheduleId property. Supports $expand.
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
