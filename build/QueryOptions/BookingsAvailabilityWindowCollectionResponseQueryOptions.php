<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingsAvailabilityWindowCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingsAvailabilityWindowCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingsAvailabilityWindowCollectionResponse properties
     * 
     * @param array<string> $select Use BookingsAvailabilityWindowCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
