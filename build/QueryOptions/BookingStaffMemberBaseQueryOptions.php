<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingStaffMemberBase resources
 *
 * Available select fields:
 */
class BookingStaffMemberBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingStaffMemberBase
     */

    /**
     * Select specific BookingStaffMemberBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
