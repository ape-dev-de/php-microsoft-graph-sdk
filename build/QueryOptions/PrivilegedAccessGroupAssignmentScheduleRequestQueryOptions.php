<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupAssignmentScheduleRequest resources
 *
 * Available select fields:
 * - accessId
 * - groupId
 * - principalId
 * - targetScheduleId
 * - activatedUsing
 * - group
 * - principal
 * - targetSchedule
 */
class PrivilegedAccessGroupAssignmentScheduleRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessGroupAssignmentScheduleRequest
     */
    public const FIELD_ACCESS_ID = 'accessId';
    public const FIELD_GROUP_ID = 'groupId';
    public const FIELD_PRINCIPAL_ID = 'principalId';
    public const FIELD_TARGET_SCHEDULE_ID = 'targetScheduleId';
    public const FIELD_ACTIVATED_USING = 'activatedUsing';
    public const FIELD_GROUP = 'group';
    public const FIELD_PRINCIPAL = 'principal';
    public const FIELD_TARGET_SCHEDULE = 'targetSchedule';

    /**
     * Select specific PrivilegedAccessGroupAssignmentScheduleRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
