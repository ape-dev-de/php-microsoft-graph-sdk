<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingCustomerInformationBaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingCustomerInformationBaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingCustomerInformationBaseCollectionResponse properties
     * 
     * @param array<string> $select Use BookingCustomerInformationBaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
