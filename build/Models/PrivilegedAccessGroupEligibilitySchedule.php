<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupEligibilitySchedule
 */
class PrivilegedAccessGroupEligibilitySchedule
{
    public function __construct(
        /** The identifier of the membership or ownership eligibility to the group that is governed by PIM. Required. The possible values are: owner, member. Supports $filter (eq). */
        public ?string $accessId = null,
        /** The identifier of the group representing the scope of the membership or ownership eligibility through PIM for Groups. Required. Supports $filter (eq). */
        public ?string $groupId = null,
        /** Indicates whether the assignment is derived from a group assignment. It can further imply whether the caller can manage the schedule. Required. The possible values are: direct, group, unknownFutureValue. Supports $filter (eq). */
        public ?string $memberType = null,
        /** The identifier of the principal whose membership or ownership eligibility is granted through PIM for Groups. Required. Supports $filter (eq). */
        public ?string $principalId = null,
        /** References the group that is the scope of the membership or ownership eligibility through PIM for Groups. Supports $expand. */
        public ?string $group = null,
        /** References the principal that's in the scope of this membership or ownership eligibility request to the group that's governed by PIM. Supports $expand. */
        public ?string $principal = null
    ) {}
}
