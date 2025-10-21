<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerAssignments resources
 *
 * Available select fields:
 */
class PlannerAssignmentsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerAssignments
     */

    /**
     * Select specific PlannerAssignments properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
