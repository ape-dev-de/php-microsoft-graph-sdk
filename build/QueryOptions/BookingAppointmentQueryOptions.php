<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingAppointment resources
 *
 * Available select fields:
 */
class BookingAppointmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingAppointment
     */

    /**
     * Select specific BookingAppointment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
