<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupAssignmentScheduleInstance resources
 *
 * Available select fields:
 * - accessId
 * - assignmentScheduleId
 * - assignmentType
 * - groupId
 * - memberType
 * - principalId
 * - activatedUsing
 * - group
 * - principal
 */
class PrivilegedAccessGroupAssignmentScheduleInstanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessGroupAssignmentScheduleInstance
     */
    public const FIELD_ACCESS_ID = 'accessId';
    public const FIELD_ASSIGNMENT_SCHEDULE_ID = 'assignmentScheduleId';
    public const FIELD_ASSIGNMENT_TYPE = 'assignmentType';
    public const FIELD_GROUP_ID = 'groupId';
    public const FIELD_MEMBER_TYPE = 'memberType';
    public const FIELD_PRINCIPAL_ID = 'principalId';
    public const FIELD_ACTIVATED_USING = 'activatedUsing';
    public const FIELD_GROUP = 'group';
    public const FIELD_PRINCIPAL = 'principal';

    /**
     * Select specific PrivilegedAccessGroupAssignmentScheduleInstance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
