<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerTaskDetails resources
 *
 * Available select fields:
 */
class PlannerTaskDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerTaskDetails
     */

    /**
     * Select specific PlannerTaskDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
