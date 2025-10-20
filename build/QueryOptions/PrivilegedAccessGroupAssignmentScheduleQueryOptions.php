<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupAssignmentSchedule resources
 *
 * Available select fields:
 * - accessId
 * - assignmentType
 * - groupId
 * - memberType
 * - principalId
 * - activatedUsing
 * - group
 * - principal
 */
class PrivilegedAccessGroupAssignmentScheduleQueryOptions extends QueryOptions
{
    public const FIELD_ACCESS_ID = 'accessId';
    public const FIELD_ASSIGNMENT_TYPE = 'assignmentType';
    public const FIELD_GROUP_ID = 'groupId';
    public const FIELD_MEMBER_TYPE = 'memberType';
    public const FIELD_PRINCIPAL_ID = 'principalId';
    public const FIELD_ACTIVATED_USING = 'activatedUsing';
    public const FIELD_GROUP = 'group';
    public const FIELD_PRINCIPAL = 'principal';

    /**
     * Select specific PrivilegedAccessGroupAssignmentSchedule properties
     * 
     * @param array<string> $select Use PrivilegedAccessGroupAssignmentScheduleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
