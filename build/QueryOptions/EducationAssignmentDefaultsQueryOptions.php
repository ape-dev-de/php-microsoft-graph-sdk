<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentDefaults resources
 *
 * Available select fields:
 * - addedStudentAction
 * - addToCalendarAction
 * - dueTime
 * - notificationChannelUrl
 */
class EducationAssignmentDefaultsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationAssignmentDefaults
     */
    public const FIELD_ADDED_STUDENT_ACTION = 'addedStudentAction';
    public const FIELD_ADD_TO_CALENDAR_ACTION = 'addToCalendarAction';
    public const FIELD_DUE_TIME = 'dueTime';
    public const FIELD_NOTIFICATION_CHANNEL_URL = 'notificationChannelUrl';

    /**
     * Select specific EducationAssignmentDefaults properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
