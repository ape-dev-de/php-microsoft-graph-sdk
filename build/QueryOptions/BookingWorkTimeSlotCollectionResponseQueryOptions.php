<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingWorkTimeSlotCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingWorkTimeSlotCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingWorkTimeSlotCollectionResponse properties
     * 
     * @param array<string> $select Use BookingWorkTimeSlotCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
