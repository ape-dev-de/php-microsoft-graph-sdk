<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerPlanDetails
 */
class PlannerPlanDetails
{
    public function __construct(
        /** An object that specifies the descriptions of the 25 categories that can be associated with tasks in the plan. */
        public ?string $categoryDescriptions = null,
        /** Set of user IDs that this plan is shared with. If you''re using Microsoft 365 groups, use the Groups API to manage group membership to share the group''s plan. You can also add existing members of the group to this collection, although it isn''t required for them to access the plan owned by the group. */
        public ?string $sharedWith = null
    ) {}
}
