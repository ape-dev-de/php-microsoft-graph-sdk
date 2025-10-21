<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerUser resources
 *
 * Available select fields:
 * - plans
 * - tasks
 */
class PlannerUserQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerUser
     */
    public const FIELD_PLANS = 'plans';
    public const FIELD_TASKS = 'tasks';

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
