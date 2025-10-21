<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupAssignmentSchedule resources
 *
 * Available select fields:
 */
class PrivilegedAccessGroupAssignmentScheduleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessGroupAssignmentSchedule
     */

    /**
     * Select specific PrivilegedAccessGroupAssignmentSchedule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
