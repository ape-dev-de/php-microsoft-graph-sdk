<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationSchoolCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EducationSchoolCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EducationSchoolCollectionResponse properties
     * 
     * @param array<string> $select Use EducationSchoolCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
