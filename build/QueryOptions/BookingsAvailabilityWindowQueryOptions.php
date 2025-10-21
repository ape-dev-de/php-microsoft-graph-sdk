<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingsAvailabilityWindow resources
 *
 * Available select fields:
 * - endDate
 * - startDate
 */
class BookingsAvailabilityWindowQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingsAvailabilityWindow
     */
    public const FIELD_END_DATE = 'endDate';
    public const FIELD_START_DATE = 'startDate';

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
