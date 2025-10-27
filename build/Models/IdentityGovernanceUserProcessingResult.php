<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceUserProcessingResult
 */
class IdentityGovernanceUserProcessingResult
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date time that the workflow execution for a user completed. Value is null if the workflow hasn't completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** The number of tasks that failed in the workflow execution. */
    public ?float $failedTasksCount = null;

    /**  */
    public ?IdentityGovernanceLifecycleWorkflowProcessingStatus $processingStatus = null;

    /** The date time that the workflow is scheduled to be executed for a user.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $scheduledDateTime = null;

    /** The date time that the workflow execution started. Value is null if the workflow execution has not started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $startedDateTime = null;

    /** The total number of tasks that in the workflow execution. */
    public ?float $totalTasksCount = null;

    /** The total number of unprocessed tasks for the workflow. */
    public ?float $totalUnprocessedTasksCount = null;

    /**  */
    public ?IdentityGovernanceWorkflowExecutionType $workflowExecutionType = null;

    /** The version of the workflow that was executed. */
    public ?float $workflowVersion = null;

    /**  */
    public ?User $subject = null;

    /** 
     * The associated individual task execution.
     * @var IdentityGovernanceTaskProcessingResult[]
     */
    public array $taskProcessingResults = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['failedTasksCount'])) {
            $this->failedTasksCount = is_numeric($data['failedTasksCount']) ? (float)$data['failedTasksCount'] : $data['failedTasksCount'];
        }
        if (isset($data['processingStatus'])) {
            $this->processingStatus = is_string($data['processingStatus']) ? IdentityGovernanceLifecycleWorkflowProcessingStatus::tryFrom($data['processingStatus']) : $data['processingStatus'];
        }
        if (isset($data['scheduledDateTime'])) {
            $this->scheduledDateTime = is_string($data['scheduledDateTime']) ? new \DateTimeImmutable($data['scheduledDateTime']) : $data['scheduledDateTime'];
        }
        if (isset($data['startedDateTime'])) {
            $this->startedDateTime = is_string($data['startedDateTime']) ? new \DateTimeImmutable($data['startedDateTime']) : $data['startedDateTime'];
        }
        if (isset($data['totalTasksCount'])) {
            $this->totalTasksCount = is_numeric($data['totalTasksCount']) ? (float)$data['totalTasksCount'] : $data['totalTasksCount'];
        }
        if (isset($data['totalUnprocessedTasksCount'])) {
            $this->totalUnprocessedTasksCount = is_numeric($data['totalUnprocessedTasksCount']) ? (float)$data['totalUnprocessedTasksCount'] : $data['totalUnprocessedTasksCount'];
        }
        if (isset($data['workflowExecutionType'])) {
            $this->workflowExecutionType = is_string($data['workflowExecutionType']) ? IdentityGovernanceWorkflowExecutionType::tryFrom($data['workflowExecutionType']) : $data['workflowExecutionType'];
        }
        if (isset($data['workflowVersion'])) {
            $this->workflowVersion = is_numeric($data['workflowVersion']) ? (float)$data['workflowVersion'] : $data['workflowVersion'];
        }
        if (isset($data['subject'])) {
            $this->subject = is_array($data['subject']) ? new User($data['subject']) : $data['subject'];
        }
        if (isset($data['taskProcessingResults'])) {
            $this->taskProcessingResults = $data['taskProcessingResults'];
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
