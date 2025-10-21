<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoleAssignmentScheduleRequestFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class RoleAssignmentScheduleRequestFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoleAssignmentScheduleRequestFilterByCurrentUserOptions
     */

    /**
     * Select specific RoleAssignmentScheduleRequestFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
