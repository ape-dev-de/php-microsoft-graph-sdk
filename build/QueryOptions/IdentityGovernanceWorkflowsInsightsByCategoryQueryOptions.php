<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceWorkflowsInsightsByCategory resources
 *
 * Available select fields:
 * - failedJoinerRuns
 * - failedLeaverRuns
 * - failedMoverRuns
 * - successfulJoinerRuns
 * - successfulLeaverRuns
 * - successfulMoverRuns
 * - totalJoinerRuns
 * - totalLeaverRuns
 * - totalMoverRuns
 */
class IdentityGovernanceWorkflowsInsightsByCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceWorkflowsInsightsByCategory
     */
    public const FIELD_FAILED_JOINER_RUNS = 'failedJoinerRuns';
    public const FIELD_FAILED_LEAVER_RUNS = 'failedLeaverRuns';
    public const FIELD_FAILED_MOVER_RUNS = 'failedMoverRuns';
    public const FIELD_SUCCESSFUL_JOINER_RUNS = 'successfulJoinerRuns';
    public const FIELD_SUCCESSFUL_LEAVER_RUNS = 'successfulLeaverRuns';
    public const FIELD_SUCCESSFUL_MOVER_RUNS = 'successfulMoverRuns';
    public const FIELD_TOTAL_JOINER_RUNS = 'totalJoinerRuns';
    public const FIELD_TOTAL_LEAVER_RUNS = 'totalLeaverRuns';
    public const FIELD_TOTAL_MOVER_RUNS = 'totalMoverRuns';

    /**
     * Select specific IdentityGovernanceWorkflowsInsightsByCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
