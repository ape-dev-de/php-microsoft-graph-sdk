<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerPlanContainer
 */
class PlannerPlanContainer
{
    public function __construct(
        /** The identifier of the resource that contains the plan. Optional. */
        public ?string $containerId = null,
        /** The type of the resource that contains the plan. For supported types, see the previous table. Possible values are: group, unknownFutureValue, roster. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: roster. Optional. */
        public ?PlannerContainerType $type = null,
        /** The full canonical URL of the container. Optional. */
        public ?string $url = null
    ) {}
}
