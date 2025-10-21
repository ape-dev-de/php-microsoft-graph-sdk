<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleEligibilitySchedule resources
 *
 * Available select fields:
 */
class UnifiedRoleEligibilityScheduleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleEligibilitySchedule
     */

    /**
     * Select specific UnifiedRoleEligibilitySchedule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
