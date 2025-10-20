<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentResourceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EducationAssignmentResourceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EducationAssignmentResourceCollectionResponse properties
     * 
     * @param array<string> $select Use EducationAssignmentResourceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
