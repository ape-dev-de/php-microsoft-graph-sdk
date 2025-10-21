<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingWorkHours resources
 *
 * Available select fields:
 * - day
 * - timeSlots
 */
class BookingWorkHoursQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingWorkHours
     */
    public const FIELD_DAY = 'day';
    public const FIELD_TIME_SLOTS = 'timeSlots';

    /**
     * Select specific BookingWorkHours properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
