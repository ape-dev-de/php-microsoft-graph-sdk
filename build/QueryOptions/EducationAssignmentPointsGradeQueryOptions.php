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
    public const FIELD_POINTS = 'points';

    /**
     * Select specific EducationAssignmentPointsGrade properties
     * 
     * @param array<string> $select Use EducationAssignmentPointsGradeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
