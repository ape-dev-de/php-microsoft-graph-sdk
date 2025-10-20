<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceUserProcessingResult
 */
class IdentityGovernanceUserProcessingResult
{
    /**
     * The date time that the workflow execution for a user completed. Value is null if the workflow hasn''t completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $completedDateTime;

    /**
     * The number of tasks that failed in the workflow execution.
     */
    private ?float $failedTasksCount;

    /**
     */
    private ?string $processingStatus;

    /**
     * The date time that the workflow is scheduled to be executed for a user.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $scheduledDateTime;

    /**
     * The date time that the workflow execution started. Value is null if the workflow execution has not started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $startedDateTime;

    /**
     * The total number of tasks that in the workflow execution.
     */
    private ?float $totalTasksCount;

    /**
     * The total number of unprocessed tasks for the workflow.
     */
    private ?float $totalUnprocessedTasksCount;

    /**
     */
    private ?string $workflowExecutionType;

    /**
     * The version of the workflow that was executed.
     */
    private ?float $workflowVersion;

    /**
     */
    private ?string $subject;

    /**
     * The associated individual task execution.
     */
    private ?string $taskProcessingResults;

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

    public function getWorkflowExecutionType(): ?string
    {
        return $this->workflowExecutionType;
    }

    public function setWorkflowExecutionType(?string $workflowExecutionType): self
    {
        $this->workflowExecutionType = $workflowExecutionType;
        return $this;
    }

    public function getWorkflowVersion(): ?float
    {
        return $this->workflowVersion;
    }

    public function setWorkflowVersion(?float $workflowVersion): self
    {
        $this->workflowVersion = $workflowVersion;
        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function getTaskProcessingResults(): ?string
    {
        return $this->taskProcessingResults;
    }

    public function setTaskProcessingResults(?string $taskProcessingResults): self
    {
        $this->taskProcessingResults = $taskProcessingResults;
        return $this;
    }

}
