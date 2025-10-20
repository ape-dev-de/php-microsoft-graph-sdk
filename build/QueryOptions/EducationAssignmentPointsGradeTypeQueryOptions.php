<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentPointsGradeType resources
 *
 * Available select fields:
 * - maxPoints
 */
class EducationAssignmentPointsGradeTypeQueryOptions extends QueryOptions
{
    public const FIELD_MAX_POINTS = 'maxPoints';

    /**
     * Select specific EducationAssignmentPointsGradeType properties
     * 
     * @param array<string> $select Use EducationAssignmentPointsGradeTypeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
