<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingCustomerBaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingCustomerBaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingCustomerBaseCollectionResponse properties
     * 
     * @param array<string> $select Use BookingCustomerBaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
