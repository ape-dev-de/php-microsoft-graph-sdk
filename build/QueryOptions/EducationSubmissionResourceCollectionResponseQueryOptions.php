<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationSubmissionResourceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EducationSubmissionResourceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EducationSubmissionResourceCollectionResponse properties
     * 
     * @param array<string> $select Use EducationSubmissionResourceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
