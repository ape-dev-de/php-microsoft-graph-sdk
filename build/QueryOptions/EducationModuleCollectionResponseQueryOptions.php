<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationModuleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EducationModuleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EducationModuleCollectionResponse properties
     * 
     * @param array<string> $select Use EducationModuleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
