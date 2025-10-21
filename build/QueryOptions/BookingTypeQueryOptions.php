<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingType resources
 *
 * Available select fields:
 */
class BookingTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingType
     */

    /**
     * Select specific BookingType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
