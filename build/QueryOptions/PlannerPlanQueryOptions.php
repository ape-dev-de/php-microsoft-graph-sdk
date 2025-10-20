<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerPlan resources
 *
 * Available select fields:
 * - container
 * - createdBy
 * - createdDateTime
 * - owner
 * - title
 * - buckets
 * - details
 * - tasks
 */
class PlannerPlanQueryOptions extends QueryOptions
{
    public const FIELD_CONTAINER = 'container';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_OWNER = 'owner';
    public const FIELD_TITLE = 'title';
    public const FIELD_BUCKETS = 'buckets';
    public const FIELD_DETAILS = 'details';
    public const FIELD_TASKS = 'tasks';

    /**
     * Select specific PlannerPlan properties
     * 
     * @param array<string> $select Use PlannerPlanQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
