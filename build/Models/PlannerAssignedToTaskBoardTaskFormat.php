<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerAssignedToTaskBoardTaskFormat
 */
class PlannerAssignedToTaskBoardTaskFormat
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Dictionary of hints used to order tasks on the AssignedTo view of the Task Board. The key of each entry is one of the users the task is assigned to and the value is the order hint. The format of each value is defined as outlined here. */
        public ?string $orderHintsByAssignee = null,
        /** Hint value used to order the task on the AssignedTo view of the Task Board when the task isn't assigned to anyone, or if the orderHintsByAssignee dictionary doesn't provide an order hint for the user the task is assigned to. The format is defined as outlined here. */
        public ?string $unassignedOrderHint = null
    ) {}
}
