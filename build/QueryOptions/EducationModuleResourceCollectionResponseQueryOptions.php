<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationModuleResourceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EducationModuleResourceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EducationModuleResourceCollectionResponse properties
     * 
     * @param array<string> $select Use EducationModuleResourceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
