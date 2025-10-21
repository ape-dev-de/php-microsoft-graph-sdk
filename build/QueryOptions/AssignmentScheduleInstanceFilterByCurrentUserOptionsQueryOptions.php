<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssignmentScheduleInstanceFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class AssignmentScheduleInstanceFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AssignmentScheduleInstanceFilterByCurrentUserOptions
     */

    /**
     * Select specific AssignmentScheduleInstanceFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
