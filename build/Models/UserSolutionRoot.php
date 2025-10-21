<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSolutionRoot
 */
class UserSolutionRoot
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The working time schedule entity associated with the solution. */
        public ?WorkingTimeSchedule $workingTimeSchedule = null
    ) {}
}
