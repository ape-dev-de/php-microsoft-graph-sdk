<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationStudent resources
 *
 * Available select fields:
 * - birthDate
 * - externalId
 * - gender
 * - grade
 * - graduationYear
 * - studentNumber
 */
class EducationStudentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationStudent
     */
    public const FIELD_BIRTH_DATE = 'birthDate';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_GENDER = 'gender';
    public const FIELD_GRADE = 'grade';
    public const FIELD_GRADUATION_YEAR = 'graduationYear';
    public const FIELD_STUDENT_NUMBER = 'studentNumber';

    /**
     * Select specific EducationStudent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
