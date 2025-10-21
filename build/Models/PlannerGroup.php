<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerGroup
 */
class PlannerGroup
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Read-only. Nullable. Returns the plannerPlans owned by the group. */
        public array $plans = []
    ) {}
}
