<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ShiftAvailability resources
 *
 * Available select fields:
 * - recurrence
 * - timeSlots
 * - timeZone
 */
class ShiftAvailabilityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ShiftAvailability
     */
    public const FIELD_RECURRENCE = 'recurrence';
    public const FIELD_TIME_SLOTS = 'timeSlots';
    public const FIELD_TIME_ZONE = 'timeZone';

    /**
     * Select specific ShiftAvailability properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
