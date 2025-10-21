<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerAssignment
 */
class PlannerAssignment
{
    public function __construct(
        /** The identity of the user that performed the assignment of the task, that is, the assignor. */
        public ?string $assignedBy = null,
        /** The time when the task was assigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $assignedDateTime = null,
        /** Hint used to order assignees in a task. The format is defined as outlined here. */
        public ?string $orderHint = null
    ) {}
}
