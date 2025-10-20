<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttendanceInterval resources
 *
 * Available select fields:
 * - durationInSeconds
 * - joinDateTime
 * - leaveDateTime
 */
class AttendanceIntervalQueryOptions extends QueryOptions
{
    public const FIELD_DURATION_IN_SECONDS = 'durationInSeconds';
    public const FIELD_JOIN_DATE_TIME = 'joinDateTime';
    public const FIELD_LEAVE_DATE_TIME = 'leaveDateTime';

    /**
     * Select specific AttendanceInterval properties
     * 
     * @param array<string> $select Use AttendanceIntervalQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
