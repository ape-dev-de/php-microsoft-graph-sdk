<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceRunSummary
 */
class IdentityGovernanceRunSummary
{
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
        if (isset($data['failedRuns'])) {
            $this->failedRuns = $data['failedRuns'];
        }
        if (isset($data['failedTasks'])) {
            $this->failedTasks = $data['failedTasks'];
        }
        if (isset($data['successfulRuns'])) {
            $this->successfulRuns = $data['successfulRuns'];
        }
        if (isset($data['totalRuns'])) {
            $this->totalRuns = $data['totalRuns'];
        }
        if (isset($data['totalTasks'])) {
            $this->totalTasks = $data['totalTasks'];
        }
        if (isset($data['totalUsers'])) {
            $this->totalUsers = $data['totalUsers'];
        }
    }
}
