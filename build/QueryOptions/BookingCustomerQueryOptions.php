<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingCustomer resources
 *
 * Available select fields:
 */
class BookingCustomerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingCustomer
     */

    /**
     * Select specific BookingCustomer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
