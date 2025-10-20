<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerBucket resources
 *
 * Available select fields:
 * - name
 * - orderHint
 * - planId
 * - tasks
 */
class PlannerBucketQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_ORDER_HINT = 'orderHint';
    public const FIELD_PLAN_ID = 'planId';
    public const FIELD_TASKS = 'tasks';

    /**
     * Select specific PlannerBucket properties
     * 
     * @param array<string> $select Use PlannerBucketQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
