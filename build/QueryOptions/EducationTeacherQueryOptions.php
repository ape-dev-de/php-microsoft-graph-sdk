<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationTeacher resources
 *
 * Available select fields:
 * - externalId
 * - teacherNumber
 */
class EducationTeacherQueryOptions extends QueryOptions
{
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_TEACHER_NUMBER = 'teacherNumber';

    /**
     * Select specific EducationTeacher properties
     * 
     * @param array<string> $select Use EducationTeacherQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
