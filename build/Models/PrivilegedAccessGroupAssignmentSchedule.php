<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupAssignmentSchedule
 */
class PrivilegedAccessGroupAssignmentSchedule
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** When the schedule was created. Optional. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The identifier of the access assignment or eligibility request that created this schedule. Optional. */
        public ?string $createdUsing = null,
        /** When the schedule was last modified. Optional. */
        public ?\DateTimeInterface $modifiedDateTime = null,
        /** Represents the period of the access assignment or eligibility. The scheduleInfo can represent a single occurrence or multiple recurring instances. Required. */
        public ?string $scheduleInfo = null,
        /** The status of the access assignment or eligibility request. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. Optional. */
        public ?string $status = null,
        /** The identifier of the membership or ownership assignment to the group that is governed through PIM. Required. The possible values are: owner, member, unknownFutureValue. Supports $filter (eq). */
        public ?string $accessId = null,
        /** Indicates whether the membership or ownership assignment for the principal is granted through activation or direct assignment. Required. The possible values are: assigned, activated, unknownFutureValue. Supports $filter (eq). */
        public ?string $assignmentType = null,
        /** The identifier of the group representing the scope of the membership or ownership assignment through PIM for Groups. Required. Supports $filter (eq). */
        public ?string $groupId = null,
        /** Indicates whether the assignment is derived from a direct group assignment or through a transitive assignment. The possible values are: direct, group, unknownFutureValue. Supports $filter (eq). */
        public ?string $memberType = null,
        /** The identifier of the principal whose membership or ownership assignment is granted through PIM for Groups. Required. Supports $filter (eq). */
        public ?string $principalId = null,
        /** When the request activates an ownership or membership assignment in PIM for Groups, this object represents the eligibility relationship. Otherwise, it''s null. Supports $expand. */
        public ?string $activatedUsing = null,
        /** References the group that is the scope of the membership or ownership assignment through PIM for Groups. Supports $expand and $select nested in $expand for select properties like id, displayName, and mail. */
        public ?string $group = null,
        /** References the principal that's in the scope of this membership or ownership assignment request to the group that's governed through PIM. Supports $expand and $select nested in $expand for id only. */
        public ?string $principal = null
    ) {}
}
