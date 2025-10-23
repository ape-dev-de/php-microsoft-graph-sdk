<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerProgressTaskBoardTaskFormat
 */
class PlannerProgressTaskBoardTaskFormat
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Hint value used to order the task on the progress view of the task board. For details about the supported format, see Using order hints in Planner. */
    public ?string $orderHint = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['orderHint'])) {
            $this->orderHint = $data['orderHint'];
        }
    }
}
