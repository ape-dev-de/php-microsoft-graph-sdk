<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTaskReport resources
 *
 * Available select fields:
 * - completedDateTime
 * - failedUsersCount
 * - lastUpdatedDateTime
 * - processingStatus
 * - runId
 * - startedDateTime
 * - successfulUsersCount
 * - totalUsersCount
 * - unprocessedUsersCount
 * - task
 * - taskDefinition
 * - taskProcessingResults
 */
class IdentityGovernanceTaskReportQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceTaskReport
     */
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_FAILED_USERS_COUNT = 'failedUsersCount';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_PROCESSING_STATUS = 'processingStatus';
    public const FIELD_RUN_ID = 'runId';
    public const FIELD_STARTED_DATE_TIME = 'startedDateTime';
    public const FIELD_SUCCESSFUL_USERS_COUNT = 'successfulUsersCount';
    public const FIELD_TOTAL_USERS_COUNT = 'totalUsersCount';
    public const FIELD_UNPROCESSED_USERS_COUNT = 'unprocessedUsersCount';
    public const FIELD_TASK = 'task';
    public const FIELD_TASK_DEFINITION = 'taskDefinition';
    public const FIELD_TASK_PROCESSING_RESULTS = 'taskProcessingResults';

    /**
     * Select specific IdentityGovernanceTaskReport properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
