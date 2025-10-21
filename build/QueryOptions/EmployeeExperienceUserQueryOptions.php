<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmployeeExperienceUser resources
 *
 * Available select fields:
 * - learningCourseActivities
 */
class EmployeeExperienceUserQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EmployeeExperienceUser
     */
    public const FIELD_LEARNING_COURSE_ACTIVITIES = 'learningCourseActivities';

    /**
     * Select specific EmployeeExperienceUser properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
