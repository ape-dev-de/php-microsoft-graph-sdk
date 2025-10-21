<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerProgressTaskBoardTaskFormat resources
 *
 * Available select fields:
 */
class PlannerProgressTaskBoardTaskFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerProgressTaskBoardTaskFormat
     */

    /**
     * Select specific PlannerProgressTaskBoardTaskFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
