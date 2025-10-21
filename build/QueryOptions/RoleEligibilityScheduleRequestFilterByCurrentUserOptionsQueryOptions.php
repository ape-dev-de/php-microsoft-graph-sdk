<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoleEligibilityScheduleRequestFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class RoleEligibilityScheduleRequestFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoleEligibilityScheduleRequestFilterByCurrentUserOptions
     */

    /**
     * Select specific RoleEligibilityScheduleRequestFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
