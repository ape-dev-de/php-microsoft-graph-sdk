<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerGroup resources
 *
 * Available select fields:
 * - plans
 */
class PlannerGroupQueryOptions extends QueryOptions
{
    public const FIELD_PLANS = 'plans';

    /**
     * Select specific PlannerGroup properties
     * 
     * @param array<string> $select Use PlannerGroupQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
