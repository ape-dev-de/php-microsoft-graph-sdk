<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerOrderHintsByAssignee resources
 *
 * Available select fields:
 */
class PlannerOrderHintsByAssigneeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerOrderHintsByAssignee
     */

    /**
     * Select specific PlannerOrderHintsByAssignee properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
