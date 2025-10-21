<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingStaffMember resources
 *
 * Available select fields:
 */
class BookingStaffMemberQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingStaffMember
     */

    /**
     * Select specific BookingStaffMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
