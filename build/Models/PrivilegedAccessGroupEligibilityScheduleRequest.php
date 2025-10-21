<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupEligibilityScheduleRequest
 */
class PrivilegedAccessGroupEligibilityScheduleRequest
{
    public function __construct(
        /** The identifier of membership or ownership eligibility relationship to the group. Required. The possible values are: owner, member, unknownFutureValue. */
        public ?string $accessId = null,
        /** The identifier of the group representing the scope of the membership and ownership eligibility through PIM for Groups. Required. */
        public ?string $groupId = null,
        /** The identifier of the principal whose membership or ownership eligibility to the group is managed through PIM for Groups. Required. */
        public ?string $principalId = null,
        /** The identifier of the schedule that's created from the eligibility request. Optional. */
        public ?string $targetScheduleId = null,
        /** References the group that is the scope of the membership or ownership eligibility request through PIM for Groups. Supports $expand and $select nested in $expand for select properties like id, displayName, and mail. */
        public ?string $group = null,
        /** References the principal that's in the scope of the membership or ownership eligibility request through the group that's governed by PIM. Supports $expand and $select nested in $expand for id only. */
        public ?string $principal = null,
        /** Schedule created by this request. */
        public ?string $targetSchedule = null
    ) {}
}
