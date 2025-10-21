<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleEligibilityScheduleRequest resources
 *
 * Available select fields:
 */
class UnifiedRoleEligibilityScheduleRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleEligibilityScheduleRequest
     */

    /**
     * Select specific UnifiedRoleEligibilityScheduleRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
