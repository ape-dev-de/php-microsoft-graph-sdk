<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerPlan resources
 *
 * Available select fields:
 */
class PlannerPlanQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerPlan
     */

    /**
     * Select specific PlannerPlan properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
