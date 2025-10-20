<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerPlanDetails resources
 *
 * Available select fields:
 * - categoryDescriptions
 * - sharedWith
 */
class PlannerPlanDetailsQueryOptions extends QueryOptions
{
    public const FIELD_CATEGORY_DESCRIPTIONS = 'categoryDescriptions';
    public const FIELD_SHARED_WITH = 'sharedWith';

    /**
     * Select specific PlannerPlanDetails properties
     * 
     * @param array<string> $select Use PlannerPlanDetailsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
