<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoleAssignmentScheduleInstanceFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class RoleAssignmentScheduleInstanceFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoleAssignmentScheduleInstanceFilterByCurrentUserOptions
     */

    /**
     * Select specific RoleAssignmentScheduleInstanceFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
