<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupAssignmentTarget
 */
class GroupAssignmentTarget
{
    public function __construct(
        /** Represents an assignment to a group. */
        public ?string $groupId = null
    ) {}
}
