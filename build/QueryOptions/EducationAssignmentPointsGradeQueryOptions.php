<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentPointsGrade resources
 *
 * Available select fields:
 * - points
 */
class EducationAssignmentPointsGradeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentPointsGrade
     */
    public const FIELD_POINTS = 'points';

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
