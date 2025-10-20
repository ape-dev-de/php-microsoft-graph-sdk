<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTaskReportSummary resources
 *
 * Available select fields:
 * - failedTasks
 * - successfulTasks
 * - totalTasks
 * - unprocessedTasks
 */
class IdentityGovernanceTaskReportSummaryQueryOptions extends QueryOptions
{
    public const FIELD_FAILED_TASKS = 'failedTasks';
    public const FIELD_SUCCESSFUL_TASKS = 'successfulTasks';
    public const FIELD_TOTAL_TASKS = 'totalTasks';
    public const FIELD_UNPROCESSED_TASKS = 'unprocessedTasks';

    /**
     * Select specific IdentityGovernanceTaskReportSummary properties
     * 
     * @param array<string> $select Use IdentityGovernanceTaskReportSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
