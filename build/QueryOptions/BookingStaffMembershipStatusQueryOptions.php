<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingStaffMembershipStatus resources
 *
 * Available select fields:
 */
class BookingStaffMembershipStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingStaffMembershipStatus
     */

    /**
     * Select specific BookingStaffMembershipStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
