<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerUser
 */
class PlannerUser
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Read-only. Nullable. Returns the plannerTasks assigned to the user.
     * @var PlannerPlan[]
     */
    public array $plans = [];

    /** 
     * Read-only. Nullable. Returns the plannerPlans shared with the user.
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
        if (isset($data['plans'])) {
            $this->plans = $data['plans'];
        }
        if (isset($data['tasks'])) {
            $this->tasks = $data['tasks'];
        }
    }
}
