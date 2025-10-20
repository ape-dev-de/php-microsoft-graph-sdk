<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingCurrency resources
 *
 * Available select fields:
 * - symbol
 */
class BookingCurrencyQueryOptions extends QueryOptions
{
    public const FIELD_SYMBOL = 'symbol';

    /**
     * Select specific BookingCurrency properties
     * 
     * @param array<string> $select Use BookingCurrencyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
