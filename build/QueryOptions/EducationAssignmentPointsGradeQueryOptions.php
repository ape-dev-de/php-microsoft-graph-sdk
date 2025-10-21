<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentPointsGrade resources
 *
 * Available select fields:
 */
class EducationAssignmentPointsGradeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentPointsGrade
     */

    /**
     * Select specific EducationAssignmentPointsGrade properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
