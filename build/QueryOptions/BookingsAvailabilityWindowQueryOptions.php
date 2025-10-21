<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingsAvailabilityWindow resources
 *
 * Available select fields:
 */
class BookingsAvailabilityWindowQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingsAvailabilityWindow
     */

    /**
     * Select specific BookingsAvailabilityWindow properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
