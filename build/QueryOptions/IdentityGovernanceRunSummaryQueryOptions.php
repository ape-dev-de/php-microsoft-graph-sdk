<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceRunSummary resources
 *
 * Available select fields:
 * - failedRuns
 * - failedTasks
 * - successfulRuns
 * - totalRuns
 * - totalTasks
 * - totalUsers
 */
class IdentityGovernanceRunSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceRunSummary
     */
    public const FIELD_FAILED_RUNS = 'failedRuns';
    public const FIELD_FAILED_TASKS = 'failedTasks';
    public const FIELD_SUCCESSFUL_RUNS = 'successfulRuns';
    public const FIELD_TOTAL_RUNS = 'totalRuns';
    public const FIELD_TOTAL_TASKS = 'totalTasks';
    public const FIELD_TOTAL_USERS = 'totalUsers';

    /**
     * Select specific IdentityGovernanceRunSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
