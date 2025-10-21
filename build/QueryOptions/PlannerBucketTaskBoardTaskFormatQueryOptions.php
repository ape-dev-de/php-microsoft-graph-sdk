<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerBucketTaskBoardTaskFormat resources
 *
 * Available select fields:
 */
class PlannerBucketTaskBoardTaskFormatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerBucketTaskBoardTaskFormat
     */

    /**
     * Select specific PlannerBucketTaskBoardTaskFormat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
