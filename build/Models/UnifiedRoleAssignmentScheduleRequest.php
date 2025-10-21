<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleAssignmentScheduleRequest
 */
class UnifiedRoleAssignmentScheduleRequest
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identifier of the approval of the request. */
        public ?string $approvalId = null,
        /** The request completion date time. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** The principal that created the request. */
        public ?string $createdBy = null,
        /** The request creation date time. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Free text field to define any custom data for the request. Not used. */
        public ?string $customData = null,
        /** The status of the request. Not nullable. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. */
        public ?string $status = null,
        /** Represents the type of the operation on the role assignment request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew, selfExtend, selfRenew, unknownFutureValue. adminAssign: For administrators to assign roles to principals.adminRemove: For administrators to remove principals from roles. adminUpdate: For administrators to change existing role assignments.adminExtend: For administrators to extend expiring assignments.adminRenew: For administrators to renew expired assignments.selfActivate: For principals to activate their assignments.selfDeactivate: For principals to deactivate their active assignments.selfExtend: For principals to request to extend their expiring assignments.selfRenew: For principals to request to renew their expired assignments. */
        public ?string $action = null,
        /** Identifier of the app-specific scope when the assignment is scoped to an app. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. Supports $filter (eq, ne, and on null values). */
        public ?string $appScopeId = null,
        /** Identifier of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. Supports $filter (eq, ne, and on null values). */
        public ?string $directoryScopeId = null,
        /** Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request. */
        public ?bool $isValidationOnly = null,
        /** A message provided by users and administrators when create they create the unifiedRoleAssignmentScheduleRequest object. */
        public ?string $justification = null,
        /** Identifier of the principal that has been granted the assignment. Can be a user, role-assignable group, or a service principal. Supports $filter (eq, ne). */
        public ?string $principalId = null,
        /** Identifier of the unifiedRoleDefinition object that is being assigned to the principal. Supports $filter (eq, ne). */
        public ?string $roleDefinitionId = null,
        /** The period of the role assignment. Recurring schedules are currently unsupported. */
        public ?string $scheduleInfo = null,
        /** Identifier of the schedule object that's linked to the assignment request. Supports $filter (eq, ne). */
        public ?string $targetScheduleId = null,
        /** Ticket details linked to the role assignment request including details of the ticket number and ticket system. */
        public ?string $ticketInfo = null,
        /** If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. Otherwise, it's null. Supports $expand and $select nested in $expand. */
        public ?string $activatedUsing = null,
        /** Read-only property with details of the app-specific scope when the assignment is scoped to an app. Nullable. Supports $expand. */
        public ?string $appScope = null,
        /** The directory object that is the scope of the assignment. Read-only. Supports $expand. */
        public ?string $directoryScope = null,
        /** The principal that's getting a role assignment through the request. Supports $expand and $select nested in $expand for id only. */
        public ?string $principal = null,
        /** Detailed information for the unifiedRoleDefinition object that is referenced through the roleDefinitionId property. Supports $expand and $select nested in $expand. */
        public ?string $roleDefinition = null,
        /** The schedule for an eligible role assignment that is referenced through the targetScheduleId property. Supports $expand and $select nested in $expand. */
        public ?string $targetSchedule = null
    ) {}
}
