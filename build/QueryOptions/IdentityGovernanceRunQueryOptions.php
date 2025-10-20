<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceRun resources
 *
 * Available select fields:
 * - completedDateTime
 * - failedTasksCount
 * - failedUsersCount
 * - lastUpdatedDateTime
 * - processingStatus
 * - scheduledDateTime
 * - startedDateTime
 * - successfulUsersCount
 * - totalTasksCount
 * - totalUnprocessedTasksCount
 * - totalUsersCount
 * - workflowExecutionType
 * - taskProcessingResults
 * - userProcessingResults
 */
class IdentityGovernanceRunQueryOptions extends QueryOptions
{
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_FAILED_TASKS_COUNT = 'failedTasksCount';
    public const FIELD_FAILED_USERS_COUNT = 'failedUsersCount';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_PROCESSING_STATUS = 'processingStatus';
    public const FIELD_SCHEDULED_DATE_TIME = 'scheduledDateTime';
    public const FIELD_STARTED_DATE_TIME = 'startedDateTime';
    public const FIELD_SUCCESSFUL_USERS_COUNT = 'successfulUsersCount';
    public const FIELD_TOTAL_TASKS_COUNT = 'totalTasksCount';
    public const FIELD_TOTAL_UNPROCESSED_TASKS_COUNT = 'totalUnprocessedTasksCount';
    public const FIELD_TOTAL_USERS_COUNT = 'totalUsersCount';
    public const FIELD_WORKFLOW_EXECUTION_TYPE = 'workflowExecutionType';
    public const FIELD_TASK_PROCESSING_RESULTS = 'taskProcessingResults';
    public const FIELD_USER_PROCESSING_RESULTS = 'userProcessingResults';

    /**
     * Select specific IdentityGovernanceRun properties
     * 
     * @param array<string> $select Use IdentityGovernanceRunQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
