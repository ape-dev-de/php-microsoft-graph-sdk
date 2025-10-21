<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoleEligibilityScheduleInstanceFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class RoleEligibilityScheduleInstanceFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoleEligibilityScheduleInstanceFilterByCurrentUserOptions
     */

    /**
     * Select specific RoleEligibilityScheduleInstanceFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
