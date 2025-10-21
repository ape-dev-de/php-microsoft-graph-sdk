<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerAssignedToTaskBoardTaskFormat resources
 *
 * Available select fields:
 */
class PlannerAssignedToTaskBoardTaskFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerAssignedToTaskBoardTaskFormat
     */

    /**
     * Select specific PlannerAssignedToTaskBoardTaskFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
