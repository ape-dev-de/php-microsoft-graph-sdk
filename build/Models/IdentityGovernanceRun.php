<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceRun
 */
class IdentityGovernanceRun
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date time that the run completed. Value is null if the workflow hasn't completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** The number of tasks that failed in the run execution. */
    public ?float $failedTasksCount = null;

    /** The number of users that failed in the run execution. */
    public ?float $failedUsersCount = null;

    /** The datetime that the run was last updated.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /**  */
    public ?IdentityGovernanceLifecycleWorkflowProcessingStatus $processingStatus = null;

    /** The date time that the run is scheduled to be executed for a workflow.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $scheduledDateTime = null;

    /** The date time that the run execution started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $startedDateTime = null;

    /** The number of successfully completed users in the run. */
    public ?float $successfulUsersCount = null;

    /**  */
    public ?float $totalTasksCount = null;

    /** The total number of unprocessed tasks in the run execution. */
    public ?float $totalUnprocessedTasksCount = null;

    /** The total number of users in the workflow execution. */
    public ?float $totalUsersCount = null;

    /**  */
    public ?IdentityGovernanceWorkflowExecutionType $workflowExecutionType = null;

    /** 
     * The related taskProcessingResults.
     * @var IdentityGovernanceTaskProcessingResult[]
     */
    public array $taskProcessingResults = [];

    /** 
     * The associated individual user execution.
     * @var IdentityGovernanceUserProcessingResult[]
     */
    public array $userProcessingResults = [];


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
            $this->failedTasksCount = $data['failedTasksCount'];
        }
        if (isset($data['failedUsersCount'])) {
            $this->failedUsersCount = $data['failedUsersCount'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = is_string($data['lastUpdatedDateTime']) ? new \DateTimeImmutable($data['lastUpdatedDateTime']) : $data['lastUpdatedDateTime'];
        }
        if (isset($data['processingStatus'])) {
            $this->processingStatus = is_array($data['processingStatus']) ? new IdentityGovernanceLifecycleWorkflowProcessingStatus($data['processingStatus']) : $data['processingStatus'];
        }
        if (isset($data['scheduledDateTime'])) {
            $this->scheduledDateTime = is_string($data['scheduledDateTime']) ? new \DateTimeImmutable($data['scheduledDateTime']) : $data['scheduledDateTime'];
        }
        if (isset($data['startedDateTime'])) {
            $this->startedDateTime = is_string($data['startedDateTime']) ? new \DateTimeImmutable($data['startedDateTime']) : $data['startedDateTime'];
        }
        if (isset($data['successfulUsersCount'])) {
            $this->successfulUsersCount = $data['successfulUsersCount'];
        }
        if (isset($data['totalTasksCount'])) {
            $this->totalTasksCount = $data['totalTasksCount'];
        }
        if (isset($data['totalUnprocessedTasksCount'])) {
            $this->totalUnprocessedTasksCount = $data['totalUnprocessedTasksCount'];
        }
        if (isset($data['totalUsersCount'])) {
            $this->totalUsersCount = $data['totalUsersCount'];
        }
        if (isset($data['workflowExecutionType'])) {
            $this->workflowExecutionType = is_array($data['workflowExecutionType']) ? new IdentityGovernanceWorkflowExecutionType($data['workflowExecutionType']) : $data['workflowExecutionType'];
        }
        if (isset($data['taskProcessingResults'])) {
            $this->taskProcessingResults = $data['taskProcessingResults'];
        }
        if (isset($data['userProcessingResults'])) {
            $this->userProcessingResults = $data['userProcessingResults'];
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
