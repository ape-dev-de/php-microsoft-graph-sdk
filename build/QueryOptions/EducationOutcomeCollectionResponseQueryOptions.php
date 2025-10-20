<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationOutcomeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EducationOutcomeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EducationOutcomeCollectionResponse properties
     * 
     * @param array<string> $select Use EducationOutcomeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
