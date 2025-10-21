<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingsAvailabilityStatus resources
 *
 * Available select fields:
 */
class BookingsAvailabilityStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingsAvailabilityStatus
     */

    /**
     * Select specific BookingsAvailabilityStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
