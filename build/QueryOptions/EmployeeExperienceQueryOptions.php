<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmployeeExperience resources
 *
 * Available select fields:
 * - communities
 * - engagementAsyncOperations
 * - learningCourseActivities
 * - learningProviders
 */
class EmployeeExperienceQueryOptions extends QueryOptions
{
    public const FIELD_COMMUNITIES = 'communities';
    public const FIELD_ENGAGEMENT_ASYNC_OPERATIONS = 'engagementAsyncOperations';
    public const FIELD_LEARNING_COURSE_ACTIVITIES = 'learningCourseActivities';
    public const FIELD_LEARNING_PROVIDERS = 'learningProviders';

    /**
     * Select specific EmployeeExperience properties
     * 
     * @param array<string> $select Use EmployeeExperienceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
