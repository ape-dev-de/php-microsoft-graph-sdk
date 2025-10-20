<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessSchedule resources
 *
 * Available select fields:
 * - createdDateTime
 * - createdUsing
 * - modifiedDateTime
 * - scheduleInfo
 * - status
 */
class PrivilegedAccessScheduleQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CREATED_USING = 'createdUsing';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';
    public const FIELD_SCHEDULE_INFO = 'scheduleInfo';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific PrivilegedAccessSchedule properties
     * 
     * @param array<string> $select Use PrivilegedAccessScheduleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
