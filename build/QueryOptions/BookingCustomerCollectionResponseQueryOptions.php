<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingCustomerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingCustomerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingCustomerCollectionResponse properties
     * 
     * @param array<string> $select Use BookingCustomerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
