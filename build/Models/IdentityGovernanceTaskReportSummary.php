<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTaskReportSummary
 */
class IdentityGovernanceTaskReportSummary
{
    public function __construct(
        /** The number of failed tasks in a report. */
        public ?float $failedTasks = null,
        /** The total number of successful tasks in a report. */
        public ?float $successfulTasks = null,
        /** The total number of tasks in a report. */
        public ?float $totalTasks = null,
        /** The number of unprocessed tasks in a report. */
        public ?string $unprocessedTasks = null
    ) {}
}
