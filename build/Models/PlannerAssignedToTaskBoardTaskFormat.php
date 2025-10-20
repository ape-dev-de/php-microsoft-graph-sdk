<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerAssignedToTaskBoardTaskFormat
 */
class PlannerAssignedToTaskBoardTaskFormat
{
    /**
     * Dictionary of hints used to order tasks on the AssignedTo view of the Task Board. The key of each entry is one of the users the task is assigned to and the value is the order hint. The format of each value is defined as outlined here.
     */
    private ?string $orderHintsByAssignee;

    /**
     * Hint value used to order the task on the AssignedTo view of the Task Board when the task isn''t assigned to anyone, or if the orderHintsByAssignee dictionary doesn''t provide an order hint for the user the task is assigned to. The format is defined as outlined here.
     */
    private ?string $unassignedOrderHint;

    public function getOrderHintsByAssignee(): ?string
    {
        return $this->orderHintsByAssignee;
    }

    public function setOrderHintsByAssignee(?string $orderHintsByAssignee): self
    {
        $this->orderHintsByAssignee = $orderHintsByAssignee;
        return $this;
    }

    public function getUnassignedOrderHint(): ?string
    {
        return $this->unassignedOrderHint;
    }

    public function setUnassignedOrderHint(?string $unassignedOrderHint): self
    {
        $this->unassignedOrderHint = $unassignedOrderHint;
        return $this;
    }

}
