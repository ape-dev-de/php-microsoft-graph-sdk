<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceWorkflowsInsightsSummary resources
 *
 * Available select fields:
 * - failedRuns
 * - failedTasks
 * - failedUsers
 * - successfulRuns
 * - successfulTasks
 * - successfulUsers
 * - totalRuns
 * - totalTasks
 * - totalUsers
 */
class IdentityGovernanceWorkflowsInsightsSummaryQueryOptions extends QueryOptions
{
    public const FIELD_FAILED_RUNS = 'failedRuns';
    public const FIELD_FAILED_TASKS = 'failedTasks';
    public const FIELD_FAILED_USERS = 'failedUsers';
    public const FIELD_SUCCESSFUL_RUNS = 'successfulRuns';
    public const FIELD_SUCCESSFUL_TASKS = 'successfulTasks';
    public const FIELD_SUCCESSFUL_USERS = 'successfulUsers';
    public const FIELD_TOTAL_RUNS = 'totalRuns';
    public const FIELD_TOTAL_TASKS = 'totalTasks';
    public const FIELD_TOTAL_USERS = 'totalUsers';

    /**
     * Select specific IdentityGovernanceWorkflowsInsightsSummary properties
     * 
     * @param array<string> $select Use IdentityGovernanceWorkflowsInsightsSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
