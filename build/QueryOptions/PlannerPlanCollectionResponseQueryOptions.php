<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerPlanCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PlannerPlanCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PlannerPlanCollectionResponse properties
     * 
     * @param array<string> $select Use PlannerPlanCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
