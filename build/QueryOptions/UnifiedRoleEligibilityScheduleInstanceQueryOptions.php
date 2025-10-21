<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleEligibilityScheduleInstance resources
 *
 * Available select fields:
 */
class UnifiedRoleEligibilityScheduleInstanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleEligibilityScheduleInstance
     */

    /**
     * Select specific UnifiedRoleEligibilityScheduleInstance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
