<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoleAssignmentScheduleFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class RoleAssignmentScheduleFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoleAssignmentScheduleFilterByCurrentUserOptions
     */

    /**
     * Select specific RoleAssignmentScheduleFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
