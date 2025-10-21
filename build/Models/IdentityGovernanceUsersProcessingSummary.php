<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceUsersProcessingSummary
 */
class IdentityGovernanceUsersProcessingSummary
{
    public function __construct(
        /**  */
        public ?float $failedTasks = null,
        /**  */
        public ?float $failedUsers = null,
        /**  */
        public ?float $successfulUsers = null,
        /**  */
        public ?float $totalTasks = null,
        /**  */
        public ?float $totalUsers = null
    ) {}
}
