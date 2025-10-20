<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationRubricOutcomeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EducationRubricOutcomeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EducationRubricOutcomeCollectionResponse properties
     * 
     * @param array<string> $select Use EducationRubricOutcomeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
