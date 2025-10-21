<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningAssignment
 */
class LearningAssignment
{
    public function __construct(
        /** Assigned date for the course activity. Optional. */
        public ?\DateTimeInterface $assignedDateTime = null,
        /** The user ID of the assigner. Optional. */
        public ?string $assignerUserId = null,
        /**  */
        public ?string $assignmentType = null,
        /** Due date for the course activity. Optional. */
        public ?string $dueDateTime = null,
        /** Notes for the course activity. Optional. */
        public ?string $notes = null
    ) {}
}
