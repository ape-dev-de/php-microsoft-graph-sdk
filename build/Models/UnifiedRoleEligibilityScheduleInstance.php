<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleEligibilityScheduleInstance
 */
class UnifiedRoleEligibilityScheduleInstance
{
    public function __construct(
        /** The end date of the schedule instance. */
        public ?\DateTimeInterface $endDateTime = null,
        /** How the role eligibility is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleEligibilitySchedule can be managed by the caller. Supports $filter (eq, ne). */
        public ?string $memberType = null,
        /** The identifier of the unifiedRoleEligibilitySchedule object from which this instance was created. Supports $filter (eq, ne). */
        public ?string $roleEligibilityScheduleId = null,
        /** When this instance starts. */
        public ?\DateTimeInterface $startDateTime = null
    ) {}
}
