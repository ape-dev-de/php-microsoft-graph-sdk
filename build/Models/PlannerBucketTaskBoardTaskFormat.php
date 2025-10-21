<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerBucketTaskBoardTaskFormat
 */
class PlannerBucketTaskBoardTaskFormat
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Hint used to order tasks in the bucket view of the task board. For details about the supported format, see Using order hints in Planner. */
        public ?string $orderHint = null
    ) {}
}
