<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingBusinessCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingBusinessCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingBusinessCollectionResponse properties
     * 
     * @param array<string> $select Use BookingBusinessCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
