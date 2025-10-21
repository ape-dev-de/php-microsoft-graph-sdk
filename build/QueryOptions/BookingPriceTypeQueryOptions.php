<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingPriceType resources
 *
 * Available select fields:
 */
class BookingPriceTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingPriceType
     */

    /**
     * Select specific BookingPriceType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
