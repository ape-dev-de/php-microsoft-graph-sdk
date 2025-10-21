<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupAssignmentTarget
 */
class GroupAssignmentTarget
{
    public function __construct(
        /** The group Id that is the target of the assignment. */
        public ?string $groupId = null
    ) {}
}
