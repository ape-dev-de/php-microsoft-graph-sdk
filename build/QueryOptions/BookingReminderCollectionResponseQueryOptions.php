<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingReminderCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingReminderCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingReminderCollectionResponse properties
     * 
     * @param array<string> $select Use BookingReminderCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
