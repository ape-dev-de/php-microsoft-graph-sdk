<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttendeeAvailability resources
 *
 * Available select fields:
 * - attendee
 * - availability
 */
class AttendeeAvailabilityQueryOptions extends QueryOptions
{
    public const FIELD_ATTENDEE = 'attendee';
    public const FIELD_AVAILABILITY = 'availability';

    /**
     * Select specific AttendeeAvailability properties
     * 
     * @param array<string> $select Use AttendeeAvailabilityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
