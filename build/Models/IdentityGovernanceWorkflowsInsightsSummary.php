<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowsInsightsSummary
 */
class IdentityGovernanceWorkflowsInsightsSummary
{
    public function __construct(
        /** Count of failed workflow runs processed in the tenant. */
        public ?float $failedRuns = null,
        /** Count of failed tasks processed in the tenant. */
        public ?float $failedTasks = null,
        /** Count of failed users processed by workflows in the tenant. */
        public ?float $failedUsers = null,
        /** Count of successful workflow runs processed in the tenant. */
        public ?float $successfulRuns = null,
        /** Count of successful tasks processed in the tenant. */
        public ?float $successfulTasks = null,
        /** Count of successful users processed by workflows in the tenant. */
        public ?float $successfulUsers = null,
        /** Count of total workflows processed in the tenant. */
        public ?float $totalRuns = null,
        /** Count of total tasks processed by workflows in the tenant. */
        public ?float $totalTasks = null,
        /** Count of total users processed by workflows in the tenant. */
        public ?float $totalUsers = null
    ) {}
}
