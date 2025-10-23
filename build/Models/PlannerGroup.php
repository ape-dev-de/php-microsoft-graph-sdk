<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerGroup
 */
class PlannerGroup
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Read-only. Nullable. Returns the plannerPlans owned by the group.
     * @var PlannerPlan[]
     */
    public array $plans = [];


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
    }
}
