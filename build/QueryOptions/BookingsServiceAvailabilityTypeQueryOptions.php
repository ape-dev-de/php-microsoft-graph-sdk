<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingsServiceAvailabilityType resources
 *
 * Available select fields:
 */
class BookingsServiceAvailabilityTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingsServiceAvailabilityType
     */

    /**
     * Select specific BookingsServiceAvailabilityType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
