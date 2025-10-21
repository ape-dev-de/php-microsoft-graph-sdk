<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleAssignmentSchedule resources
 *
 * Available select fields:
 * - assignmentType
 * - memberType
 * - scheduleInfo
 * - activatedUsing
 */
class UnifiedRoleAssignmentScheduleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleAssignmentSchedule
     */
    public const FIELD_ASSIGNMENT_TYPE = 'assignmentType';
    public const FIELD_MEMBER_TYPE = 'memberType';
    public const FIELD_SCHEDULE_INFO = 'scheduleInfo';
    public const FIELD_ACTIVATED_USING = 'activatedUsing';

    /**
     * Select specific UnifiedRoleAssignmentSchedule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
