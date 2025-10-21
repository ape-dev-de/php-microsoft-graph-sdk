<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingService resources
 *
 * Available select fields:
 */
class BookingServiceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingService
     */

    /**
     * Select specific BookingService properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
