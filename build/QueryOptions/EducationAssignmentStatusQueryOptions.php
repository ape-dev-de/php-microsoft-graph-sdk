<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentStatus resources
 *
 * Available select fields:
 */
class EducationAssignmentStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentStatus
     */

    /**
     * Select specific EducationAssignmentStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
