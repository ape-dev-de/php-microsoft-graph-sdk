<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleAssignmentScheduleInstance resources
 *
 * Available select fields:
 */
class UnifiedRoleAssignmentScheduleInstanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleAssignmentScheduleInstance
     */

    /**
     * Select specific UnifiedRoleAssignmentScheduleInstance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
