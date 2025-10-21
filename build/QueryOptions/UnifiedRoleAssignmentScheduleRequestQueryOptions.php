<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleAssignmentScheduleRequest resources
 *
 * Available select fields:
 */
class UnifiedRoleAssignmentScheduleRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleAssignmentScheduleRequest
     */

    /**
     * Select specific UnifiedRoleAssignmentScheduleRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
