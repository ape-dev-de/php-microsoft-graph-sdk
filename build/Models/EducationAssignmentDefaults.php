<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentDefaults
 */
class EducationAssignmentDefaults
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Class-level default behavior for handling students who are added after the assignment is published. Possible values are: none, assignIfOpen. */
        public ?string $addedStudentAction = null,
        /** Optional field to control adding assignments to students' and teachers' calendars when the assignment is published. The possible values are: none, studentsAndPublisher, studentsAndTeamOwners, unknownFutureValue, and studentsOnly. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: studentsOnly. The default value is none. */
        public ?string $addToCalendarAction = null,
        /** Class-level default value for due time field. Default value is 23:59:00. */
        public ?string $dueTime = null,
        /** Default Teams channel to which notifications are sent. Default value is null. */
        public ?string $notificationChannelUrl = null
    ) {}
}
