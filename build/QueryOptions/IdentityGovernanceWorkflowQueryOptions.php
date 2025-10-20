<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceWorkflow resources
 *
 * Available select fields:
 * - deletedDateTime
 * - id
 * - nextScheduleRunDateTime
 * - version
 * - executionScope
 * - runs
 * - taskReports
 * - userProcessingResults
 * - versions
 */
class IdentityGovernanceWorkflowQueryOptions extends QueryOptions
{
    public const FIELD_DELETED_DATE_TIME = 'deletedDateTime';
    public const FIELD_ID = 'id';
    public const FIELD_NEXT_SCHEDULE_RUN_DATE_TIME = 'nextScheduleRunDateTime';
    public const FIELD_VERSION = 'version';
    public const FIELD_EXECUTION_SCOPE = 'executionScope';
    public const FIELD_RUNS = 'runs';
    public const FIELD_TASK_REPORTS = 'taskReports';
    public const FIELD_USER_PROCESSING_RESULTS = 'userProcessingResults';
    public const FIELD_VERSIONS = 'versions';

    /**
     * Select specific IdentityGovernanceWorkflow properties
     * 
     * @param array<string> $select Use IdentityGovernanceWorkflowQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
