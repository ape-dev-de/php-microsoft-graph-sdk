<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Planner resources
 *
 * Available select fields:
 * - buckets
 * - plans
 * - tasks
 */
class PlannerQueryOptions extends QueryOptions
{
    public const FIELD_BUCKETS = 'buckets';
    public const FIELD_PLANS = 'plans';
    public const FIELD_TASKS = 'tasks';

    /**
     * Select specific Planner properties
     * 
     * @param array<string> $select Use PlannerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
