<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentPointsGradeType resources
 *
 * Available select fields:
 */
class EducationAssignmentPointsGradeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentPointsGradeType
     */

    /**
     * Select specific EducationAssignmentPointsGradeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
