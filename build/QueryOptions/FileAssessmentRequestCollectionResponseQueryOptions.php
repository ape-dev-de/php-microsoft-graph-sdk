<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileAssessmentRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class FileAssessmentRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific FileAssessmentRequestCollectionResponse properties
     * 
     * @param array<string> $select Use FileAssessmentRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
