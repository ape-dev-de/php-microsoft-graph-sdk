<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleAssignmentSchedule resources
 *
 * Available select fields:
 */
class UnifiedRoleAssignmentScheduleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleAssignmentSchedule
     */

    /**
     * Select specific UnifiedRoleAssignmentSchedule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
