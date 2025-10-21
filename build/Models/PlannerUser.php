<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerUser
 */
class PlannerUser
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Read-only. Nullable. Returns the plannerTasks assigned to the user. */
        public array $plans = [],
        /** @var string[] Read-only. Nullable. Returns the plannerPlans shared with the user. */
        public array $tasks = []
    ) {}
}
