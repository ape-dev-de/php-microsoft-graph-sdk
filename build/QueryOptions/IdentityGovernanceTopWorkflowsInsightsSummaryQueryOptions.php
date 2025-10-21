<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTopWorkflowsInsightsSummary resources
 *
 * Available select fields:
 * - failedRuns
 * - failedUsers
 * - successfulRuns
 * - successfulUsers
 * - totalRuns
 * - totalUsers
 * - workflowCategory
 * - workflowDisplayName
 * - workflowId
 * - workflowVersion
 */
class IdentityGovernanceTopWorkflowsInsightsSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceTopWorkflowsInsightsSummary
     */
    public const FIELD_FAILED_RUNS = 'failedRuns';
    public const FIELD_FAILED_USERS = 'failedUsers';
    public const FIELD_SUCCESSFUL_RUNS = 'successfulRuns';
    public const FIELD_SUCCESSFUL_USERS = 'successfulUsers';
    public const FIELD_TOTAL_RUNS = 'totalRuns';
    public const FIELD_TOTAL_USERS = 'totalUsers';
    public const FIELD_WORKFLOW_CATEGORY = 'workflowCategory';
    public const FIELD_WORKFLOW_DISPLAY_NAME = 'workflowDisplayName';
    public const FIELD_WORKFLOW_ID = 'workflowId';
    public const FIELD_WORKFLOW_VERSION = 'workflowVersion';

    /**
     * Select specific IdentityGovernanceTopWorkflowsInsightsSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
