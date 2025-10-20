<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationGradingCategoryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EducationGradingCategoryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EducationGradingCategoryCollectionResponse properties
     * 
     * @param array<string> $select Use EducationGradingCategoryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
