<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupEligibilitySchedule resources
 *
 * Available select fields:
 */
class PrivilegedAccessGroupEligibilityScheduleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessGroupEligibilitySchedule
     */

    /**
     * Select specific PrivilegedAccessGroupEligibilitySchedule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
