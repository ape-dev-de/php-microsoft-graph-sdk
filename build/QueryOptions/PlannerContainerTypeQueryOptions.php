<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerContainerType resources
 *
 * Available select fields:
 */
class PlannerContainerTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerContainerType
     */

    /**
     * Select specific PlannerContainerType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
