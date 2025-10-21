<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleEligibilityScheduleInstance resources
 *
 * Available select fields:
 * - endDateTime
 * - memberType
 * - roleEligibilityScheduleId
 * - startDateTime
 */
class UnifiedRoleEligibilityScheduleInstanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleEligibilityScheduleInstance
     */
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_MEMBER_TYPE = 'memberType';
    public const FIELD_ROLE_ELIGIBILITY_SCHEDULE_ID = 'roleEligibilityScheduleId';
    public const FIELD_START_DATE_TIME = 'startDateTime';

    /**
     * Select specific UnifiedRoleEligibilityScheduleInstance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
