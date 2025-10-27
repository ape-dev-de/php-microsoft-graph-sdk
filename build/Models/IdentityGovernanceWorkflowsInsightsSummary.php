<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowsInsightsSummary
 */
class IdentityGovernanceWorkflowsInsightsSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Count of failed workflow runs processed in the tenant. */
    public ?float $failedRuns = null;

    /** Count of failed tasks processed in the tenant. */
    public ?float $failedTasks = null;

    /** Count of failed users processed by workflows in the tenant. */
    public ?float $failedUsers = null;

    /** Count of successful workflow runs processed in the tenant. */
    public ?float $successfulRuns = null;

    /** Count of successful tasks processed in the tenant. */
    public ?float $successfulTasks = null;

    /** Count of successful users processed by workflows in the tenant. */
    public ?float $successfulUsers = null;

    /** Count of total workflows processed in the tenant. */
    public ?float $totalRuns = null;

    /** Count of total tasks processed by workflows in the tenant. */
    public ?float $totalTasks = null;

    /** Count of total users processed by workflows in the tenant. */
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
        if (isset($data['failedUsers'])) {
            $this->failedUsers = is_numeric($data['failedUsers']) ? (float)$data['failedUsers'] : $data['failedUsers'];
        }
        if (isset($data['successfulRuns'])) {
            $this->successfulRuns = is_numeric($data['successfulRuns']) ? (float)$data['successfulRuns'] : $data['successfulRuns'];
        }
        if (isset($data['successfulTasks'])) {
            $this->successfulTasks = is_numeric($data['successfulTasks']) ? (float)$data['successfulTasks'] : $data['successfulTasks'];
        }
        if (isset($data['successfulUsers'])) {
            $this->successfulUsers = is_numeric($data['successfulUsers']) ? (float)$data['successfulUsers'] : $data['successfulUsers'];
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
