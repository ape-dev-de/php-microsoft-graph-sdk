<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupEligibilitySchedule
 */
class PrivilegedAccessGroupEligibilitySchedule
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
        public ?RequestSchedule $scheduleInfo = null,
        /** The status of the access assignment or eligibility request. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. Optional. */
        public ?string $status = null,
        /** The identifier of the membership or ownership eligibility to the group that is governed by PIM. Required. The possible values are: owner, member. Supports $filter (eq). */
        public ?PrivilegedAccessGroupRelationships $accessId = null,
        /** The identifier of the group representing the scope of the membership or ownership eligibility through PIM for Groups. Required. Supports $filter (eq). */
        public ?string $groupId = null,
        /** Indicates whether the assignment is derived from a group assignment. It can further imply whether the caller can manage the schedule. Required. The possible values are: direct, group, unknownFutureValue. Supports $filter (eq). */
        public ?PrivilegedAccessGroupMemberType $memberType = null,
        /** The identifier of the principal whose membership or ownership eligibility is granted through PIM for Groups. Required. Supports $filter (eq). */
        public ?string $principalId = null,
        /** References the group that is the scope of the membership or ownership eligibility through PIM for Groups. Supports $expand. */
        public ?Group $group = null,
        /** References the principal that's in the scope of this membership or ownership eligibility request to the group that's governed by PIM. Supports $expand. */
        public ?DirectoryObject $principal = null
    ) {}
}
