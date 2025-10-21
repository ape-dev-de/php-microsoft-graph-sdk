<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationSubmission resources
 *
 * Available select fields:
 */
class EducationSubmissionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationSubmission
     */

    /**
     * Select specific EducationSubmission properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
