<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleEligibilitySchedule resources
 *
 * Available select fields:
 * - memberType
 * - scheduleInfo
 */
class UnifiedRoleEligibilityScheduleQueryOptions extends QueryOptions
{
    public const FIELD_MEMBER_TYPE = 'memberType';
    public const FIELD_SCHEDULE_INFO = 'scheduleInfo';

    /**
     * Select specific UnifiedRoleEligibilitySchedule properties
     * 
     * @param array<string> $select Use UnifiedRoleEligibilityScheduleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
