<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleEligibilitySchedule
 */
class UnifiedRoleEligibilitySchedule
{
    public function __construct(
        /** How the role eligibility is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleEligibilitySchedule can be managed by the caller. Supports $filter (eq, ne). */
        public ?string $memberType = null,
        /** The period of the role eligibility. */
        public ?string $scheduleInfo = null
    ) {}
}
