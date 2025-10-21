<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupAssignmentScheduleRequest
 */
class PrivilegedAccessGroupAssignmentScheduleRequest
{
    public function __construct(
        /** The identifier of a membership or ownership assignment relationship to the group. Required. The possible values are: owner, member, unknownFutureValue. */
        public ?string $accessId = null,
        /** The identifier of the group representing the scope of the membership or ownership assignment through PIM for Groups. Required. */
        public ?string $groupId = null,
        /** The identifier of the principal whose membership or ownership assignment to the group is managed through PIM for Groups. Supports $filter (eq, ne). */
        public ?string $principalId = null,
        /** The identifier of the schedule that''s created from the membership or ownership assignment request. Supports $filter (eq, ne). */
        public ?string $targetScheduleId = null,
        /** When the request activates a membership or ownership assignment in PIM for Groups, this object represents the eligibility policy for the group. Otherwise, it is null. Supports $expand. */
        public ?string $activatedUsing = null,
        /** References the group that is the scope of the membership or ownership assignment request through PIM for Groups. Supports $expand and $select nested in $expand for select properties like id, displayName, and mail. */
        public ?string $group = null,
        /** References the principal that's in the scope of this membership or ownership assignment request through the group that's governed by PIM. Supports $expand and $select nested in $expand for id only. */
        public ?string $principal = null,
        /** Schedule created by this request. Supports $expand. */
        public ?string $targetSchedule = null
    ) {}
}
