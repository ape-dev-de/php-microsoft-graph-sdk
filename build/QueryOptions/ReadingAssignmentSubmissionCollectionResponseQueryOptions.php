<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReadingAssignmentSubmissionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ReadingAssignmentSubmissionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ReadingAssignmentSubmissionCollectionResponse properties
     * 
     * @param array<string> $select Use ReadingAssignmentSubmissionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
