<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTopTasksInsightsSummary
 */
class IdentityGovernanceTopTasksInsightsSummary
{
    public function __construct(
        /** Count of failed runs of the task. */
        public ?float $failedTasks = null,
        /** Count of failed users who were processed by the task. */
        public ?float $failedUsers = null,
        /** Count of successful runs of the task. */
        public ?float $successfulTasks = null,
        /** Count of successful users processed by the task. */
        public ?float $successfulUsers = null,
        /** The name of the task. */
        public ?string $taskDefinitionDisplayName = null,
        /** The task ID. */
        public ?string $taskDefinitionId = null,
        /** Count of total runs of the task. */
        public ?float $totalTasks = null,
        /** Count of total users processed by the task. */
        public ?string $totalUsers = null
    ) {}
}
