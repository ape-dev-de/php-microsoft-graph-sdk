<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingCurrency resources
 *
 * Available select fields:
 */
class BookingCurrencyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingCurrency
     */

    /**
     * Select specific BookingCurrency properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
