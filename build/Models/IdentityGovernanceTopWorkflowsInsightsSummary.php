<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTopWorkflowsInsightsSummary
 */
class IdentityGovernanceTopWorkflowsInsightsSummary
{
    /**
     * Count of failed runs for workflow.
     */
    private ?float $failedRuns;

    /**
     * Count of failed users who were processed.
     */
    private ?float $failedUsers;

    /**
     * Count of successful runs of the workflow.
     */
    private ?float $successfulRuns;

    /**
     * Count of successful users processed by the workflow.
     */
    private ?float $successfulUsers;

    /**
     * Count of total runs of workflow.
     */
    private ?float $totalRuns;

    /**
     * Total number of users processed by the workflow.
     */
    private ?float $totalUsers;

    /**
     */
    private ?string $workflowCategory;

    /**
     * The name of the workflow.
     */
    private ?string $workflowDisplayName;

    /**
     * The workflow ID.
     */
    private ?string $workflowId;

    /**
     * The version of the workflow that was a top workflow ran.
     */
    private ?string $workflowVersion;


    public function getFailedRuns(): ?float
    {
        return $this->failedRuns;
    }

    public function setFailedRuns(?float $failedRuns): self
    {
        $this->failedRuns = $failedRuns;
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

    public function getTotalUsers(): ?float
    {
        return $this->totalUsers;
    }

    public function setTotalUsers(?float $totalUsers): self
    {
        $this->totalUsers = $totalUsers;
        return $this;
    }

    public function getWorkflowCategory(): ?string
    {
        return $this->workflowCategory;
    }

    public function setWorkflowCategory(?string $workflowCategory): self
    {
        $this->workflowCategory = $workflowCategory;
        return $this;
    }

    public function getWorkflowDisplayName(): ?string
    {
        return $this->workflowDisplayName;
    }

    public function setWorkflowDisplayName(?string $workflowDisplayName): self
    {
        $this->workflowDisplayName = $workflowDisplayName;
        return $this;
    }

    public function getWorkflowId(): ?string
    {
        return $this->workflowId;
    }

    public function setWorkflowId(?string $workflowId): self
    {
        $this->workflowId = $workflowId;
        return $this;
    }

    public function getWorkflowVersion(): ?string
    {
        return $this->workflowVersion;
    }

    public function setWorkflowVersion(?string $workflowVersion): self
    {
        $this->workflowVersion = $workflowVersion;
        return $this;
    }

}
