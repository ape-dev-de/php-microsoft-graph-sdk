<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningAssignment
 */
class LearningAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when the assignment was completed. Optional. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** The percentage completion value of the course activity. Optional. */
        public ?float $completionPercentage = null,
        /**  */
        public ?string $externalcourseActivityId = null,
        /** The user ID of the learner to whom the activity is assigned. Required. */
        public ?string $learnerUserId = null,
        /** The ID of the learning content created in Viva Learning. Required. */
        public ?string $learningContentId = null,
        /** The registration ID of the provider. Required. */
        public ?string $learningProviderId = null,
        /** The status of the course activity. Possible values are: notStarted, inProgress, completed. Required. */
        public ?CourseStatus $status = null,
        /** Assigned date for the course activity. Optional. */
        public ?\DateTimeInterface $assignedDateTime = null,
        /** The user ID of the assigner. Optional. */
        public ?string $assignerUserId = null,
        /**  */
        public ?AssignmentType $assignmentType = null,
        /** Due date for the course activity. Optional. */
        public ?DateTimeTimeZone $dueDateTime = null,
        /** Notes for the course activity. Optional. */
        public ?ItemBody $notes = null
    ) {}
}
