<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssignmentScheduleFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class AssignmentScheduleFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AssignmentScheduleFilterByCurrentUserOptions
     */

    /**
     * Select specific AssignmentScheduleFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
