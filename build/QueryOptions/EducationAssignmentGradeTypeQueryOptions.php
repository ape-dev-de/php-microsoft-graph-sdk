<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentGradeType resources
 *
 * Available select fields:
 */
class EducationAssignmentGradeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentGradeType
     */

    /**
     * Select specific EducationAssignmentGradeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
