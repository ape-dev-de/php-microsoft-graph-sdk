<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssignmentScheduleRequestFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class AssignmentScheduleRequestFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AssignmentScheduleRequestFilterByCurrentUserOptions
     */

    /**
     * Select specific AssignmentScheduleRequestFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
