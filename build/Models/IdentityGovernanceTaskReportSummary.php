<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTaskReportSummary
 */
class IdentityGovernanceTaskReportSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['failedTasks'])) {
            $this->failedTasks = is_numeric($data['failedTasks']) ? (float)$data['failedTasks'] : $data['failedTasks'];
        }
        if (isset($data['successfulTasks'])) {
            $this->successfulTasks = is_numeric($data['successfulTasks']) ? (float)$data['successfulTasks'] : $data['successfulTasks'];
        }
        if (isset($data['totalTasks'])) {
            $this->totalTasks = is_numeric($data['totalTasks']) ? (float)$data['totalTasks'] : $data['totalTasks'];
        }
        if (isset($data['unprocessedTasks'])) {
            $this->unprocessedTasks = is_numeric($data['unprocessedTasks']) ? (float)$data['unprocessedTasks'] : $data['unprocessedTasks'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
