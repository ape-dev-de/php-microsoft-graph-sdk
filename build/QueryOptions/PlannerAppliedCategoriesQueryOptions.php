<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerAppliedCategories resources
 *
 * Available select fields:
 */
class PlannerAppliedCategoriesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerAppliedCategories
     */

    /**
     * Select specific PlannerAppliedCategories properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
