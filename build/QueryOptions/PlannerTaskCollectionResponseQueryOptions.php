<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerTaskCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PlannerTaskCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PlannerTaskCollectionResponse properties
     * 
     * @param array<string> $select Use PlannerTaskCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
