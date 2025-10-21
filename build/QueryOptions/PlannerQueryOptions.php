<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Planner resources
 *
 * Available select fields:
 */
class PlannerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Planner
     */

    /**
     * Select specific Planner properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
