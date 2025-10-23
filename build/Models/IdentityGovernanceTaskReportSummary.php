<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTaskReportSummary
 */
class IdentityGovernanceTaskReportSummary
{
    /** The number of failed tasks in a report. */
    public ?float $failedTasks = null;

    /** The total number of successful tasks in a report. */
    public ?float $successfulTasks = null;

    /** The total number of tasks in a report. */
    public ?float $totalTasks = null;

    /** The number of unprocessed tasks in a report. */
    public ?float $unprocessedTasks = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['failedTasks'])) {
            $this->failedTasks = $data['failedTasks'];
        }
        if (isset($data['successfulTasks'])) {
            $this->successfulTasks = $data['successfulTasks'];
        }
        if (isset($data['totalTasks'])) {
            $this->totalTasks = $data['totalTasks'];
        }
        if (isset($data['unprocessedTasks'])) {
            $this->unprocessedTasks = $data['unprocessedTasks'];
        }
    }
}
