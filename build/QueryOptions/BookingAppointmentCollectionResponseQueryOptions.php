<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingAppointmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingAppointmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingAppointmentCollectionResponse properties
     * 
     * @param array<string> $select Use BookingAppointmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
