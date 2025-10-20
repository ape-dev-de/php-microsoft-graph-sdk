<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RubricCriterionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RubricCriterionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RubricCriterionCollectionResponse properties
     * 
     * @param array<string> $select Use RubricCriterionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
