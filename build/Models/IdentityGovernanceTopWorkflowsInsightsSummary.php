<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTopWorkflowsInsightsSummary
 */
class IdentityGovernanceTopWorkflowsInsightsSummary
{
    public function __construct(
        /** Count of failed runs for workflow. */
        public ?float $failedRuns = null,
        /** Count of failed users who were processed. */
        public ?float $failedUsers = null,
        /** Count of successful runs of the workflow. */
        public ?float $successfulRuns = null,
        /** Count of successful users processed by the workflow. */
        public ?float $successfulUsers = null,
        /** Count of total runs of workflow. */
        public ?float $totalRuns = null,
        /** Total number of users processed by the workflow. */
        public ?float $totalUsers = null,
        /**  */
        public ?string $workflowCategory = null,
        /** The name of the workflow. */
        public ?string $workflowDisplayName = null,
        /** The workflow ID. */
        public ?string $workflowId = null,
        /** The version of the workflow that was a top workflow ran. */
        public ?string $workflowVersion = null
    ) {}
}
