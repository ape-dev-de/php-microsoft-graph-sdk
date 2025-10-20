<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingCurrencyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingCurrencyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingCurrencyCollectionResponse properties
     * 
     * @param array<string> $select Use BookingCurrencyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
