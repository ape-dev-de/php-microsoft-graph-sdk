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
    /**
     * Available select fields for EducationAssignmentPointsGradeType
     */
    public const FIELD_MAX_POINTS = 'maxPoints';

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
