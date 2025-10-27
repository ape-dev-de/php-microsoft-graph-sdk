<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceRunSummary
 */
class IdentityGovernanceRunSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The number of failed workflow runs. */
    public ?float $failedRuns = null;

    /** The number of failed tasks of a workflow. */
    public ?float $failedTasks = null;

    /** The number of successful workflow runs. */
    public ?float $successfulRuns = null;

    /** The total number of runs for a workflow. */
    public ?float $totalRuns = null;

    /** The total number of tasks processed by a workflow. */
    public ?float $totalTasks = null;

    /** The total number of users processed by a workflow. */
    public ?float $totalUsers = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['failedRuns'])) {
            $this->failedRuns = is_numeric($data['failedRuns']) ? (float)$data['failedRuns'] : $data['failedRuns'];
        }
        if (isset($data['failedTasks'])) {
            $this->failedTasks = is_numeric($data['failedTasks']) ? (float)$data['failedTasks'] : $data['failedTasks'];
        }
        if (isset($data['successfulRuns'])) {
            $this->successfulRuns = is_numeric($data['successfulRuns']) ? (float)$data['successfulRuns'] : $data['successfulRuns'];
        }
        if (isset($data['totalRuns'])) {
            $this->totalRuns = is_numeric($data['totalRuns']) ? (float)$data['totalRuns'] : $data['totalRuns'];
        }
        if (isset($data['totalTasks'])) {
            $this->totalTasks = is_numeric($data['totalTasks']) ? (float)$data['totalTasks'] : $data['totalTasks'];
        }
        if (isset($data['totalUsers'])) {
            $this->totalUsers = is_numeric($data['totalUsers']) ? (float)$data['totalUsers'] : $data['totalUsers'];
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
