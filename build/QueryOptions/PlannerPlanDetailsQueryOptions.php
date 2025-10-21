<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerPlanDetails resources
 *
 * Available select fields:
 */
class PlannerPlanDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerPlanDetails
     */

    /**
     * Select specific PlannerPlanDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
