<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceRunSummary
 */
class IdentityGovernanceRunSummary
{
    public function __construct(
        /** The number of failed workflow runs. */
        public ?float $failedRuns = null,
        /** The number of failed tasks of a workflow. */
        public ?float $failedTasks = null,
        /** The number of successful workflow runs. */
        public ?float $successfulRuns = null,
        /** The total number of runs for a workflow. */
        public ?float $totalRuns = null,
        /** The total number of tasks processed by a workflow. */
        public ?float $totalTasks = null,
        /** The total number of users processed by a workflow. */
        public ?float $totalUsers = null
    ) {}
}
