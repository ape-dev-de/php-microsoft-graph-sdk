<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RubricCriterion resources
 *
 * Available select fields:
 * - description
 */
class RubricCriterionQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';

    /**
     * Select specific RubricCriterion properties
     * 
     * @param array<string> $select Use RubricCriterionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
