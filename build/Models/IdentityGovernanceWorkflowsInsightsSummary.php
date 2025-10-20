<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowsInsightsSummary
 */
class IdentityGovernanceWorkflowsInsightsSummary
{
    /**
     * Count of failed workflow runs processed in the tenant.
     */
    private ?float $failedRuns;

    /**
     * Count of failed tasks processed in the tenant.
     */
    private ?float $failedTasks;

    /**
     * Count of failed users processed by workflows in the tenant.
     */
    private ?float $failedUsers;

    /**
     * Count of successful workflow runs processed in the tenant.
     */
    private ?float $successfulRuns;

    /**
     * Count of successful tasks processed in the tenant.
     */
    private ?float $successfulTasks;

    /**
     * Count of successful users processed by workflows in the tenant.
     */
    private ?float $successfulUsers;

    /**
     * Count of total workflows processed in the tenant.
     */
    private ?float $totalRuns;

    /**
     * Count of total tasks processed by workflows in the tenant.
     */
    private ?float $totalTasks;

    /**
     * Count of total users processed by workflows in the tenant.
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

    public function getFailedUsers(): ?float
    {
        return $this->failedUsers;
    }

    public function setFailedUsers(?float $failedUsers): self
    {
        $this->failedUsers = $failedUsers;
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

    public function getSuccessfulTasks(): ?float
    {
        return $this->successfulTasks;
    }

    public function setSuccessfulTasks(?float $successfulTasks): self
    {
        $this->successfulTasks = $successfulTasks;
        return $this;
    }

    public function getSuccessfulUsers(): ?float
    {
        return $this->successfulUsers;
    }

    public function setSuccessfulUsers(?float $successfulUsers): self
    {
        $this->successfulUsers = $successfulUsers;
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
