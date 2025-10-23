<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerBucket
 */
class PlannerBucket
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Name of the bucket. */
    public ?string $name = null;

    /** Hint used to order items of this type in a list view. For details about the supported format, see Using order hints in Planner. */
    public ?string $orderHint = null;

    /** Plan ID to which the bucket belongs. */
    public ?string $planId = null;

    /** 
     * Read-only. Nullable. The collection of tasks in the bucket.
     * @var PlannerTask[]
     */
    public array $tasks = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['orderHint'])) {
            $this->orderHint = $data['orderHint'];
        }
        if (isset($data['planId'])) {
            $this->planId = $data['planId'];
        }
        if (isset($data['tasks'])) {
            $this->tasks = $data['tasks'];
        }
    }
}
