<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleAssignmentScheduleInstance
 */
class UnifiedRoleAssignmentScheduleInstance
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identifier of the app-specific scope when the assignment or role eligibility is scoped to an app. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. */
        public ?string $appScopeId = null,
        /** Identifier of the directory object representing the scope of the assignment or role eligibility. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. */
        public ?string $directoryScopeId = null,
        /** Identifier of the principal that has been granted the role assignment or that's eligible for a role. */
        public ?string $principalId = null,
        /** Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that the principal is eligible for. */
        public ?string $roleDefinitionId = null,
        /** Read-only property with details of the app-specific scope when the assignment or role eligibility is scoped to an app. Nullable. */
        public ?string $appScope = null,
        /** The directory object that is the scope of the assignment or role eligibility. Read-only. */
        public ?string $directoryScope = null,
        /** The principal that's getting a role assignment or role eligibility through the request. */
        public ?string $principal = null,
        /** Detailed information for the roleDefinition object that is referenced through the roleDefinitionId property. */
        public ?string $roleDefinition = null,
        /** The type of the assignment that can either be Assigned or Activated. Supports $filter (eq, ne). */
        public ?string $assignmentType = null,
        /** The end date of the schedule instance. */
        public ?\DateTimeInterface $endDateTime = null,
        /** How the assignment is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne). */
        public ?string $memberType = null,
        /** The identifier of the role assignment in Microsoft Entra. Supports $filter (eq, ne). */
        public ?string $roleAssignmentOriginId = null,
        /** The identifier of the unifiedRoleAssignmentSchedule object from which this instance was created. Supports $filter (eq, ne). */
        public ?string $roleAssignmentScheduleId = null,
        /** When this instance starts. */
        public ?\DateTimeInterface $startDateTime = null,
        /** If the request is from an eligible administrator to activate a role, this parameter shows the related eligible assignment for that activation. Otherwise, it''s null. Supports $expand and $select nested in $expand. */
        public ?string $activatedUsing = null
    ) {}
}
