<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTopTasksInsightsSummary
 */
class IdentityGovernanceTopTasksInsightsSummary
{
    /**
     * Count of failed runs of the task.
     */
    private ?float $failedTasks;

    /**
     * Count of failed users who were processed by the task.
     */
    private ?float $failedUsers;

    /**
     * Count of successful runs of the task.
     */
    private ?float $successfulTasks;

    /**
     * Count of successful users processed by the task.
     */
    private ?float $successfulUsers;

    /**
     * The name of the task.
     */
    private ?string $taskDefinitionDisplayName;

    /**
     * The task ID.
     */
    private ?string $taskDefinitionId;

    /**
     * Count of total runs of the task.
     */
    private ?float $totalTasks;

    /**
     * Count of total users processed by the task.
     */
    private ?string $totalUsers;


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

    public function getTaskDefinitionDisplayName(): ?string
    {
        return $this->taskDefinitionDisplayName;
    }

    public function setTaskDefinitionDisplayName(?string $taskDefinitionDisplayName): self
    {
        $this->taskDefinitionDisplayName = $taskDefinitionDisplayName;
        return $this;
    }

    public function getTaskDefinitionId(): ?string
    {
        return $this->taskDefinitionId;
    }

    public function setTaskDefinitionId(?string $taskDefinitionId): self
    {
        $this->taskDefinitionId = $taskDefinitionId;
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
