<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerTask
 */
class PlannerTask
{
    public function __construct(
        /** Number of checklist items with value set to false, representing incomplete items. */
        public ?float $activeChecklistItemCount = null,
        /** The categories to which the task has been applied. See applied Categories for possible values. */
        public ?string $appliedCategories = null,
        /** Hint used to order items of this type in a list view. The format is defined as outlined here. */
        public ?string $assigneePriority = null,
        /** The set of assignees the task is assigned to. */
        public ?string $assignments = null,
        /** Bucket ID to which the task belongs. The bucket needs to be in the plan that the task is in. It's 28 characters long and case-sensitive. Format validation is done on the service. */
        public ?string $bucketId = null,
        /** Number of checklist items that are present on the task. */
        public ?float $checklistItemCount = null,
        /** Identity of the user that completed the task. */
        public ?string $completedBy = null,
        /** Read-only. Date and time at which the ''percentComplete'' of the task is set to ''100''. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $completedDateTime = null,
        /** Thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group. */
        public ?string $conversationThreadId = null,
        /** Identity of the user that created the task. */
        public ?string $createdBy = null,
        /** Read-only. Date and time at which the task is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Date and time at which the task is due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $dueDateTime = null,
        /** Read-only. Value is true if the details object of the task has a nonempty description and false otherwise. */
        public ?bool $hasDescription = null,
        /** Hint used to order items of this type in a list view. The format is defined as outlined here. */
        public ?string $orderHint = null,
        /** Percentage of task completion. When set to 100, the task is considered completed. */
        public ?float $percentComplete = null,
        /** Plan ID to which the task belongs. */
        public ?string $planId = null,
        /** This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference. */
        public ?string $previewType = null,
        /** Priority of the task. The valid range of values is between 0 and 10, with the increasing value being lower priority (0 has the highest priority and 10 has the lowest priority).  Currently, Planner interprets values 0 and 1 as ''urgent'', 2, 3 and 4 as ''important'', 5, 6, and 7 as ''medium'', and 8, 9, and 10 as ''low''.  Additionally, Planner sets the value 1 for ''urgent'', 3 for ''important'', 5 for ''medium'', and 9 for ''low''. */
        public ?float $priority = null,
        /** Number of external references that exist on the task. */
        public ?float $referenceCount = null,
        /** Date and time at which the task starts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $startDateTime = null,
        /** Title of the task. */
        public ?string $title = null,
        /** Read-only. Nullable. Used to render the task correctly in the task board view when grouped by assignedTo. */
        public ?string $assignedToTaskBoardFormat = null,
        /** Read-only. Nullable. Used to render the task correctly in the task board view when grouped by bucket. */
        public ?string $bucketTaskBoardFormat = null,
        /** Read-only. Nullable. More details about the task. */
        public ?string $details = null,
        /** Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress. */
        public ?string $progressTaskBoardFormat = null
    ) {}
}
