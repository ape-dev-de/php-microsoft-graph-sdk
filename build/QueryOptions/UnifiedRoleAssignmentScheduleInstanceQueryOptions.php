<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleAssignmentScheduleInstance resources
 *
 * Available select fields:
 * - assignmentType
 * - endDateTime
 * - memberType
 * - roleAssignmentOriginId
 * - roleAssignmentScheduleId
 * - startDateTime
 * - activatedUsing
 */
class UnifiedRoleAssignmentScheduleInstanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleAssignmentScheduleInstance
     */
    public const FIELD_ASSIGNMENT_TYPE = 'assignmentType';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_MEMBER_TYPE = 'memberType';
    public const FIELD_ROLE_ASSIGNMENT_ORIGIN_ID = 'roleAssignmentOriginId';
    public const FIELD_ROLE_ASSIGNMENT_SCHEDULE_ID = 'roleAssignmentScheduleId';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_ACTIVATED_USING = 'activatedUsing';

    /**
     * Select specific UnifiedRoleAssignmentScheduleInstance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
