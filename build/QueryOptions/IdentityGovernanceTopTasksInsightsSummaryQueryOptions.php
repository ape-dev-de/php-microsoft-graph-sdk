<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTopTasksInsightsSummary resources
 *
 * Available select fields:
 * - failedTasks
 * - failedUsers
 * - successfulTasks
 * - successfulUsers
 * - taskDefinitionDisplayName
 * - taskDefinitionId
 * - totalTasks
 * - totalUsers
 */
class IdentityGovernanceTopTasksInsightsSummaryQueryOptions extends QueryOptions
{
    public const FIELD_FAILED_TASKS = 'failedTasks';
    public const FIELD_FAILED_USERS = 'failedUsers';
    public const FIELD_SUCCESSFUL_TASKS = 'successfulTasks';
    public const FIELD_SUCCESSFUL_USERS = 'successfulUsers';
    public const FIELD_TASK_DEFINITION_DISPLAY_NAME = 'taskDefinitionDisplayName';
    public const FIELD_TASK_DEFINITION_ID = 'taskDefinitionId';
    public const FIELD_TOTAL_TASKS = 'totalTasks';
    public const FIELD_TOTAL_USERS = 'totalUsers';

    /**
     * Select specific IdentityGovernanceTopTasksInsightsSummary properties
     * 
     * @param array<string> $select Use IdentityGovernanceTopTasksInsightsSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
