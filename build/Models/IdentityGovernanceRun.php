<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceRun
 */
class IdentityGovernanceRun
{
    /**
     * The date time that the run completed. Value is null if the workflow hasn''t completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $completedDateTime;

    /**
     * The number of tasks that failed in the run execution.
     */
    private ?float $failedTasksCount;

    /**
     * The number of users that failed in the run execution.
     */
    private ?float $failedUsersCount;

    /**
     * The datetime that the run was last updated.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;

    /**
     */
    private ?string $processingStatus;

    /**
     * The date time that the run is scheduled to be executed for a workflow.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $scheduledDateTime;

    /**
     * The date time that the run execution started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $startedDateTime;

    /**
     * The number of successfully completed users in the run.
     */
    private ?float $successfulUsersCount;

    /**
     */
    private ?float $totalTasksCount;

    /**
     * The total number of unprocessed tasks in the run execution.
     */
    private ?float $totalUnprocessedTasksCount;

    /**
     * The total number of users in the workflow execution.
     */
    private ?float $totalUsersCount;

    /**
     */
    private ?string $workflowExecutionType;

    /**
     * The related taskProcessingResults.
     */
    private array $taskProcessingResults = [];

    /**
     * The associated individual user execution.
     * @var string[]
     */
    private array $userProcessingResults = [];


    public function getCompletedDateTime(): ?\DateTimeInterface
    {
        return $this->completedDateTime;
    }

    public function setCompletedDateTime(?\DateTimeInterface $completedDateTime): self
    {
        $this->completedDateTime = $completedDateTime;
        return $this;
    }

    public function getFailedTasksCount(): ?float
    {
        return $this->failedTasksCount;
    }

    public function setFailedTasksCount(?float $failedTasksCount): self
    {
        $this->failedTasksCount = $failedTasksCount;
        return $this;
    }

    public function getFailedUsersCount(): ?float
    {
        return $this->failedUsersCount;
    }

    public function setFailedUsersCount(?float $failedUsersCount): self
    {
        $this->failedUsersCount = $failedUsersCount;
        return $this;
    }

    public function getLastUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdatedDateTime;
    }

    public function setLastUpdatedDateTime(?\DateTimeInterface $lastUpdatedDateTime): self
    {
        $this->lastUpdatedDateTime = $lastUpdatedDateTime;
        return $this;
    }

    public function getProcessingStatus(): ?string
    {
        return $this->processingStatus;
    }

    public function setProcessingStatus(?string $processingStatus): self
    {
        $this->processingStatus = $processingStatus;
        return $this;
    }

    public function getScheduledDateTime(): ?\DateTimeInterface
    {
        return $this->scheduledDateTime;
    }

    public function setScheduledDateTime(?\DateTimeInterface $scheduledDateTime): self
    {
        $this->scheduledDateTime = $scheduledDateTime;
        return $this;
    }

    public function getStartedDateTime(): ?\DateTimeInterface
    {
        return $this->startedDateTime;
    }

    public function setStartedDateTime(?\DateTimeInterface $startedDateTime): self
    {
        $this->startedDateTime = $startedDateTime;
        return $this;
    }

    public function getSuccessfulUsersCount(): ?float
    {
        return $this->successfulUsersCount;
    }

    public function setSuccessfulUsersCount(?float $successfulUsersCount): self
    {
        $this->successfulUsersCount = $successfulUsersCount;
        return $this;
    }

    public function getTotalTasksCount(): ?float
    {
        return $this->totalTasksCount;
    }

    public function setTotalTasksCount(?float $totalTasksCount): self
    {
        $this->totalTasksCount = $totalTasksCount;
        return $this;
    }

    public function getTotalUnprocessedTasksCount(): ?float
    {
        return $this->totalUnprocessedTasksCount;
    }

    public function setTotalUnprocessedTasksCount(?float $totalUnprocessedTasksCount): self
    {
        $this->totalUnprocessedTasksCount = $totalUnprocessedTasksCount;
        return $this;
    }

    public function getTotalUsersCount(): ?float
    {
        return $this->totalUsersCount;
    }

    public function setTotalUsersCount(?float $totalUsersCount): self
    {
        $this->totalUsersCount = $totalUsersCount;
        return $this;
    }

    public function getWorkflowExecutionType(): ?string
    {
        return $this->workflowExecutionType;
    }

    public function setWorkflowExecutionType(?string $workflowExecutionType): self
    {
        $this->workflowExecutionType = $workflowExecutionType;
        return $this;
    }

    public function getTaskProcessingResults(): array
    {
        return $this->taskProcessingResults;
    }

    public function setTaskProcessingResults(array $taskProcessingResults): self
    {
        $this->taskProcessingResults = $taskProcessingResults;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getUserProcessingResults(): array
    {
        return $this->userProcessingResults;
    }

    /**
     * @param string[] $userProcessingResults
     */
    public function setUserProcessingResults(array $userProcessingResults): self
    {
        $this->userProcessingResults = $userProcessingResults;
        return $this;
    }

}
