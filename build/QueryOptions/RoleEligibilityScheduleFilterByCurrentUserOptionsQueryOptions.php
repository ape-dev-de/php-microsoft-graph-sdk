<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoleEligibilityScheduleFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class RoleEligibilityScheduleFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoleEligibilityScheduleFilterByCurrentUserOptions
     */

    /**
     * Select specific RoleEligibilityScheduleFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
