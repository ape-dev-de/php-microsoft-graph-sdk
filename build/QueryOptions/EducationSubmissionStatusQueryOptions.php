<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationSubmissionStatus resources
 *
 * Available select fields:
 */
class EducationSubmissionStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationSubmissionStatus
     */

    /**
     * Select specific EducationSubmissionStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
