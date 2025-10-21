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
    /**
     * Available select fields for Planner
     */
    public const FIELD_BUCKETS = 'buckets';
    public const FIELD_PLANS = 'plans';
    public const FIELD_TASKS = 'tasks';

    /**
     * Select specific Planner properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
