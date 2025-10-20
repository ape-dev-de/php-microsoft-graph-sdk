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
    public const FIELD_PLANS = 'plans';
    public const FIELD_TASKS = 'tasks';

    /**
     * Select specific PlannerUser properties
     * 
     * @param array<string> $select Use PlannerUserQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
