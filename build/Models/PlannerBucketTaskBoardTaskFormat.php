<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerBucketTaskBoardTaskFormat
 */
class PlannerBucketTaskBoardTaskFormat
{
    /**
     * Hint used to order tasks in the bucket view of the task board. For details about the supported format, see Using order hints in Planner.
     */
    private ?string $orderHint;


    public function getOrderHint(): ?string
    {
        return $this->orderHint;
    }

    public function setOrderHint(?string $orderHint): self
    {
        $this->orderHint = $orderHint;
        return $this;
    }

}
