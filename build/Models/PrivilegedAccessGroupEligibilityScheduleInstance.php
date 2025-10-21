<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupEligibilityScheduleInstance
 */
class PrivilegedAccessGroupEligibilityScheduleInstance
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** When the schedule instance ends. Required. */
        public ?\DateTimeInterface $endDateTime = null,
        /** When this instance starts. Required. */
        public ?\DateTimeInterface $startDateTime = null,
        /** The identifier of the membership or ownership eligibility relationship to the group. Required. The possible values are: owner, member. Supports $filter (eq). */
        public ?PrivilegedAccessGroupRelationships $accessId = null,
        /** The identifier of the privilegedAccessGroupEligibilitySchedule from which this instance was created. Required. Supports $filter (eq, ne). */
        public ?string $eligibilityScheduleId = null,
        /** The identifier of the group representing the scope of the membership or ownership eligibility through PIM for Groups. Required. Supports $filter (eq). */
        public ?string $groupId = null,
        /** Indicates whether the assignment is derived from a group assignment. It can further imply whether the calling principal can manage the assignment schedule. Required. The possible values are: direct, group, unknownFutureValue. Supports $filter (eq). */
        public ?PrivilegedAccessGroupMemberType $memberType = null,
        /** The identifier of the principal whose membership or ownership eligibility to the group is managed through PIM for Groups. Required. Supports $filter (eq). */
        public ?string $principalId = null,
        /** References the group that is the scope of the membership or ownership eligibility through PIM for Groups. Supports $expand. */
        public ?Group $group = null,
        /** References the principal that's in the scope of the membership or ownership eligibility request through the group that's governed by PIM. Supports $expand. */
        public ?DirectoryObject $principal = null
    ) {}
}
