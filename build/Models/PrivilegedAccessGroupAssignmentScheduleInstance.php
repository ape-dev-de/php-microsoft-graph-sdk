<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupAssignmentScheduleInstance
 */
class PrivilegedAccessGroupAssignmentScheduleInstance
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** When the schedule instance ends. Required. */
        public ?\DateTimeInterface $endDateTime = null,
        /** When this instance starts. Required. */
        public ?\DateTimeInterface $startDateTime = null,
        /** The identifier of the membership or ownership assignment relationship to the group. Required. The possible values are: owner, member,  unknownFutureValue. Supports $filter (eq). */
        public ?PrivilegedAccessGroupRelationships $accessId = null,
        /** The identifier of the privilegedAccessGroupAssignmentSchedule from which this instance was created. Required. Supports $filter (eq, ne). */
        public ?string $assignmentScheduleId = null,
        /** Indicates whether the membership or ownership assignment is granted through activation of an eligibility or through direct assignment. Required. The possible values are: assigned, activated, unknownFutureValue. Supports $filter (eq). */
        public ?PrivilegedAccessGroupAssignmentType $assignmentType = null,
        /** The identifier of the group representing the scope of the membership or ownership assignment through PIM for Groups. Optional. Supports $filter (eq). */
        public ?string $groupId = null,
        /** Indicates whether the assignment is derived from a group assignment. It can further imply whether the caller can manage the assignment schedule. Required. The possible values are: direct, group, unknownFutureValue. Supports $filter (eq). */
        public ?PrivilegedAccessGroupMemberType $memberType = null,
        /** The identifier of the principal whose membership or ownership assignment to the group is managed through PIM for Groups. Required. Supports $filter (eq). */
        public ?string $principalId = null,
        /** When the request activates a membership or ownership in PIM for Groups, this object represents the eligibility request for the group. Otherwise, it is null. */
        public ?PrivilegedAccessGroupEligibilityScheduleInstance $activatedUsing = null,
        /** References the group that is the scope of the membership or ownership assignment through PIM for Groups. Supports $expand. */
        public ?Group $group = null,
        /** References the principal that's in the scope of the membership or ownership assignment request through the group that's governed by PIM. Supports $expand. */
        public ?DirectoryObject $principal = null
    ) {}
}
