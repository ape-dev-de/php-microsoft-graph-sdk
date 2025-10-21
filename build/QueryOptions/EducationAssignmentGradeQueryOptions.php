<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentGrade resources
 *
 * Available select fields:
 * - gradedBy
 * - gradedDateTime
 */
class EducationAssignmentGradeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentGrade
     */
    public const FIELD_GRADED_BY = 'gradedBy';
    public const FIELD_GRADED_DATE_TIME = 'gradedDateTime';

    /**
     * Select specific EducationAssignmentGrade properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
