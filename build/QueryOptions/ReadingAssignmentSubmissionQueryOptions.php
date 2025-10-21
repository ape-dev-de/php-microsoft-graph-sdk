<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReadingAssignmentSubmission resources
 *
 * Available select fields:
 */
class ReadingAssignmentSubmissionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ReadingAssignmentSubmission
     */

    /**
     * Select specific ReadingAssignmentSubmission properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
