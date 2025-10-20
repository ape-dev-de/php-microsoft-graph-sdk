<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationRubricCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EducationRubricCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EducationRubricCollectionResponse properties
     * 
     * @param array<string> $select Use EducationRubricCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
