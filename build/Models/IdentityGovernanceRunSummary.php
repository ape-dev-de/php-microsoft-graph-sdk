<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceRunSummary
 */
class IdentityGovernanceRunSummary
{
    /**
     * The number of failed workflow runs.
     */
    private ?float $failedRuns;

    /**
     * The number of failed tasks of a workflow.
     */
    private ?float $failedTasks;

    /**
     * The number of successful workflow runs.
     */
    private ?float $successfulRuns;

    /**
     * The total number of runs for a workflow.
     */
    private ?float $totalRuns;

    /**
     * The total number of tasks processed by a workflow.
     */
    private ?float $totalTasks;

    /**
     * The total number of users processed by a workflow.
     */
    private ?string $totalUsers;

    public function getFailedRuns(): ?float
    {
        return $this->failedRuns;
    }

    public function setFailedRuns(?float $failedRuns): self
    {
        $this->failedRuns = $failedRuns;
        return $this;
    }

    public function getFailedTasks(): ?float
    {
        return $this->failedTasks;
    }

    public function setFailedTasks(?float $failedTasks): self
    {
        $this->failedTasks = $failedTasks;
        return $this;
    }

    public function getSuccessfulRuns(): ?float
    {
        return $this->successfulRuns;
    }

    public function setSuccessfulRuns(?float $successfulRuns): self
    {
        $this->successfulRuns = $successfulRuns;
        return $this;
    }

    public function getTotalRuns(): ?float
    {
        return $this->totalRuns;
    }

    public function setTotalRuns(?float $totalRuns): self
    {
        $this->totalRuns = $totalRuns;
        return $this;
    }

    public function getTotalTasks(): ?float
    {
        return $this->totalTasks;
    }

    public function setTotalTasks(?float $totalTasks): self
    {
        $this->totalTasks = $totalTasks;
        return $this;
    }

    public function getTotalUsers(): ?string
    {
        return $this->totalUsers;
    }

    public function setTotalUsers(?string $totalUsers): self
    {
        $this->totalUsers = $totalUsers;
        return $this;
    }

}
