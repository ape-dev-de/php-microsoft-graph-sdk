<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationCourse resources
 *
 * Available select fields:
 * - courseNumber
 * - description
 * - displayName
 * - externalId
 * - subject
 */
class EducationCourseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationCourse
     */
    public const FIELD_COURSE_NUMBER = 'courseNumber';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_SUBJECT = 'subject';

    /**
     * Select specific EducationCourse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
