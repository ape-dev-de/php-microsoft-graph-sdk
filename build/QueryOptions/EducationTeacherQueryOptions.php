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
    /**
     * Available select fields for EducationTeacher
     */
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_TEACHER_NUMBER = 'teacherNumber';

    /**
     * Select specific EducationTeacher properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
