<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationSubmissionResource resources
 *
 * Available select fields:
 */
class EducationSubmissionResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationSubmissionResource
     */

    /**
     * Select specific EducationSubmissionResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
