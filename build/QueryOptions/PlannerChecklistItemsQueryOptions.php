<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerChecklistItems resources
 *
 * Available select fields:
 */
class PlannerChecklistItemsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerChecklistItems
     */

    /**
     * Select specific PlannerChecklistItems properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
