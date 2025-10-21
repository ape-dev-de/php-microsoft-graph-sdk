<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerUser resources
 *
 * Available select fields:
 */
class PlannerUserQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerUser
     */

    /**
     * Select specific PlannerUser properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
