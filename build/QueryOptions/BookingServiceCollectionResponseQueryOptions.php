<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingServiceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingServiceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingServiceCollectionResponse properties
     * 
     * @param array<string> $select Use BookingServiceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
