<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceUserSummary
 */
class IdentityGovernanceUserSummary
{
    public function __construct(
        /** The number of failed tasks for users in a user summary. */
        public ?float $failedTasks = null,
        /** The number of failed users in a user summary. */
        public ?float $failedUsers = null,
        /** The number of successful users in a user summary. */
        public ?float $successfulUsers = null,
        /** The total tasks of users in a user summary. */
        public ?float $totalTasks = null,
        /** The total number of users in a user summary */
        public ?string $totalUsers = null
    ) {}
}
