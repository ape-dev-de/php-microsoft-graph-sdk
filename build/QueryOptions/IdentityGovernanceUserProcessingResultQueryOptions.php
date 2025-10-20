<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceUserProcessingResult resources
 *
 * Available select fields:
 * - completedDateTime
 * - failedTasksCount
 * - processingStatus
 * - scheduledDateTime
 * - startedDateTime
 * - totalTasksCount
 * - totalUnprocessedTasksCount
 * - workflowExecutionType
 * - workflowVersion
 * - subject
 * - taskProcessingResults
 */
class IdentityGovernanceUserProcessingResultQueryOptions extends QueryOptions
{
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_FAILED_TASKS_COUNT = 'failedTasksCount';
    public const FIELD_PROCESSING_STATUS = 'processingStatus';
    public const FIELD_SCHEDULED_DATE_TIME = 'scheduledDateTime';
    public const FIELD_STARTED_DATE_TIME = 'startedDateTime';
    public const FIELD_TOTAL_TASKS_COUNT = 'totalTasksCount';
    public const FIELD_TOTAL_UNPROCESSED_TASKS_COUNT = 'totalUnprocessedTasksCount';
    public const FIELD_WORKFLOW_EXECUTION_TYPE = 'workflowExecutionType';
    public const FIELD_WORKFLOW_VERSION = 'workflowVersion';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_TASK_PROCESSING_RESULTS = 'taskProcessingResults';

    /**
     * Select specific IdentityGovernanceUserProcessingResult properties
     * 
     * @param array<string> $select Use IdentityGovernanceUserProcessingResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
