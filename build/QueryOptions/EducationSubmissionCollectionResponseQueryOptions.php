<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationSubmissionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EducationSubmissionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EducationSubmissionCollectionResponse properties
     * 
     * @param array<string> $select Use EducationSubmissionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
