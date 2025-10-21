<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingCustomerInformation resources
 *
 * Available select fields:
 */
class BookingCustomerInformationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingCustomerInformation
     */

    /**
     * Select specific BookingCustomerInformation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
