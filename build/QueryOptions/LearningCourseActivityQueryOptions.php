<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningCourseActivity resources
 *
 * Available select fields:
 * - completedDateTime
 * - completionPercentage
 * - externalcourseActivityId
 * - learnerUserId
 * - learningContentId
 * - learningProviderId
 * - status
 */
class LearningCourseActivityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LearningCourseActivity
     */
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_COMPLETION_PERCENTAGE = 'completionPercentage';
    public const FIELD_EXTERNALCOURSE_ACTIVITY_ID = 'externalcourseActivityId';
    public const FIELD_LEARNER_USER_ID = 'learnerUserId';
    public const FIELD_LEARNING_CONTENT_ID = 'learningContentId';
    public const FIELD_LEARNING_PROVIDER_ID = 'learningProviderId';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific LearningCourseActivity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
