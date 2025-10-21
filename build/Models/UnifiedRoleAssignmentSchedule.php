<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleAssignmentSchedule
 */
class UnifiedRoleAssignmentSchedule
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identifier of the app-specific scope when the assignment or eligibility is scoped to an app. The scope of an assignment or eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. */
        public ?string $appScopeId = null,
        /** When the schedule was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Identifier of the object through which this schedule was created. */
        public ?string $createdUsing = null,
        /** Identifier of the directory object representing the scope of the assignment or eligibility. The scope of an assignment or eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. */
        public ?string $directoryScopeId = null,
        /** When the schedule was last modified. */
        public ?\DateTimeInterface $modifiedDateTime = null,
        /** Identifier of the principal that has been granted the role assignment or eligibility. */
        public ?string $principalId = null,
        /** Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that a principal is eligible for. */
        public ?string $roleDefinitionId = null,
        /** The status of the role assignment or eligibility request. */
        public ?string $status = null,
        /** Read-only property with details of the app-specific scope when the role eligibility or assignment is scoped to an app. Nullable. */
        public ?string $appScope = null,
        /** The directory object that is the scope of the role eligibility or assignment. Read-only. */
        public ?string $directoryScope = null,
        /** The principal that's getting a role assignment or that's eligible for a role through the request. */
        public ?string $principal = null,
        /** Detailed information for the roleDefinition object that is referenced through the roleDefinitionId property. */
        public ?string $roleDefinition = null,
        /** The type of the assignment that can either be Assigned or Activated. Supports $filter (eq, ne). */
        public ?string $assignmentType = null,
        /** How the assignment is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne). */
        public ?string $memberType = null,
        /** The period of the role assignment. It can represent a single occurrence or multiple recurrences. */
        public ?string $scheduleInfo = null,
        /** If the request is from an eligible administrator to activate a role, this parameter shows the related eligible assignment for that activation. Otherwise, it''s null. Supports $expand. */
        public ?string $activatedUsing = null
    ) {}
}
