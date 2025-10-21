<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerGroup
 */
class PlannerGroup
{
    public function __construct(
        /** @var string[] Read-only. Nullable. Returns the plannerPlans owned by the group. */
        public array $plans = []
    ) {}
}
