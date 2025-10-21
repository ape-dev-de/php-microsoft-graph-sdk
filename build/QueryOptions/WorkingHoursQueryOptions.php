<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkingHours resources
 *
 * Available select fields:
 * - daysOfWeek
 * - endTime
 * - startTime
 * - timeZone
 */
class WorkingHoursQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkingHours
     */
    public const FIELD_DAYS_OF_WEEK = 'daysOfWeek';
    public const FIELD_END_TIME = 'endTime';
    public const FIELD_START_TIME = 'startTime';
    public const FIELD_TIME_ZONE = 'timeZone';

    /**
     * Select specific WorkingHours properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
