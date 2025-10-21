<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTaskReport
 */
class IdentityGovernanceTaskReport
{
    /**
     * The date time that the associated run completed. Value is null if the run has not completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $completedDateTime;

    /**
     * The number of users in the run execution for which the associated task failed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?float $failedUsersCount;

    /**
     * The date and time that the task report was last updated.
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;

    /**
     */
    private ?string $processingStatus;

    /**
     * The unique identifier of the associated run.
     */
    private ?string $runId;

    /**
     * The date time that the associated run started. Value is null if the run has not started.
     */
    private ?\DateTimeInterface $startedDateTime;

    /**
     * The number of users in the run execution for which the associated task succeeded.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?float $successfulUsersCount;

    /**
     * The total number of users in the run execution for which the associated task was scheduled to execute.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?float $totalUsersCount;

    /**
     * The number of users in the run execution for which the associated task is queued, in progress, or canceled.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?float $unprocessedUsersCount;

    /**
     */
    private ?string $task;

    /**
     */
    private ?string $taskDefinition;

    /**
     * The related lifecycle workflow taskProcessingResults.
     * @var string[]
     */
    private array $taskProcessingResults = [];


    public function getCompletedDateTime(): ?\DateTimeInterface
    {
        return $this->completedDateTime;
    }

    public function setCompletedDateTime(?\DateTimeInterface $completedDateTime): self
    {
        $this->completedDateTime = $completedDateTime;
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

    public function getRunId(): ?string
    {
        return $this->runId;
    }

    public function setRunId(?string $runId): self
    {
        $this->runId = $runId;
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

    public function getTotalUsersCount(): ?float
    {
        return $this->totalUsersCount;
    }

    public function setTotalUsersCount(?float $totalUsersCount): self
    {
        $this->totalUsersCount = $totalUsersCount;
        return $this;
    }

    public function getUnprocessedUsersCount(): ?float
    {
        return $this->unprocessedUsersCount;
    }

    public function setUnprocessedUsersCount(?float $unprocessedUsersCount): self
    {
        $this->unprocessedUsersCount = $unprocessedUsersCount;
        return $this;
    }

    public function getTask(): ?string
    {
        return $this->task;
    }

    public function setTask(?string $task): self
    {
        $this->task = $task;
        return $this;
    }

    public function getTaskDefinition(): ?string
    {
        return $this->taskDefinition;
    }

    public function setTaskDefinition(?string $taskDefinition): self
    {
        $this->taskDefinition = $taskDefinition;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTaskProcessingResults(): array
    {
        return $this->taskProcessingResults;
    }

    /**
     * @param string[] $taskProcessingResults
     */
    public function setTaskProcessingResults(array $taskProcessingResults): self
    {
        $this->taskProcessingResults = $taskProcessingResults;
        return $this;
    }

}
