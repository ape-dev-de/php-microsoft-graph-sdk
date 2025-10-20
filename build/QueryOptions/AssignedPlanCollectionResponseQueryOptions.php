<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssignedPlanCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AssignedPlanCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AssignedPlanCollectionResponse properties
     * 
     * @param array<string> $select Use AssignedPlanCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
