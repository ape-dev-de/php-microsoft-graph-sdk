<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupAssignmentScheduleInstance resources
 *
 * Available select fields:
 */
class PrivilegedAccessGroupAssignmentScheduleInstanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessGroupAssignmentScheduleInstance
     */

    /**
     * Select specific PrivilegedAccessGroupAssignmentScheduleInstance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
