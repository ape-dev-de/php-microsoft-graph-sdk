<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingStaffRole resources
 *
 * Available select fields:
 */
class BookingStaffRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingStaffRole
     */

    /**
     * Select specific BookingStaffRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
