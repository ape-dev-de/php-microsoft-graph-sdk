<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingsAvailability resources
 *
 * Available select fields:
 * - availabilityType
 * - businessHours
 */
class BookingsAvailabilityQueryOptions extends QueryOptions
{
    public const FIELD_AVAILABILITY_TYPE = 'availabilityType';
    public const FIELD_BUSINESS_HOURS = 'businessHours';

    /**
     * Select specific BookingsAvailability properties
     * 
     * @param array<string> $select Use BookingsAvailabilityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
