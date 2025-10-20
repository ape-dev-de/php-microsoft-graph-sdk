<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationPointsOutcomeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EducationPointsOutcomeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EducationPointsOutcomeCollectionResponse properties
     * 
     * @param array<string> $select Use EducationPointsOutcomeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
