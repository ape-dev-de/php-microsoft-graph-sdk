<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerGroup resources
 *
 * Available select fields:
 */
class PlannerGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerGroup
     */

    /**
     * Select specific PlannerGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
