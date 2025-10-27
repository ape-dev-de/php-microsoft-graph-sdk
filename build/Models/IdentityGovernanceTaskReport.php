<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTaskReport
 */
class IdentityGovernanceTaskReport
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date time that the associated run completed. Value is null if the run has not completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** The number of users in the run execution for which the associated task failed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?float $failedUsersCount = null;

    /** The date and time that the task report was last updated. */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /**  */
    public ?IdentityGovernanceLifecycleWorkflowProcessingStatus $processingStatus = null;

    /** The unique identifier of the associated run. */
    public ?string $runId = null;

    /** The date time that the associated run started. Value is null if the run has not started. */
    public ?\DateTimeInterface $startedDateTime = null;

    /** The number of users in the run execution for which the associated task succeeded.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?float $successfulUsersCount = null;

    /** The total number of users in the run execution for which the associated task was scheduled to execute.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?float $totalUsersCount = null;

    /** The number of users in the run execution for which the associated task is queued, in progress, or canceled.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?float $unprocessedUsersCount = null;

    /**  */
    public ?IdentityGovernanceTask $task = null;

    /**  */
    public ?IdentityGovernanceTaskDefinition $taskDefinition = null;

    /** 
     * The related lifecycle workflow taskProcessingResults.
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
        if (isset($data['failedUsersCount'])) {
            $this->failedUsersCount = is_numeric($data['failedUsersCount']) ? (float)$data['failedUsersCount'] : $data['failedUsersCount'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = is_string($data['lastUpdatedDateTime']) ? new \DateTimeImmutable($data['lastUpdatedDateTime']) : $data['lastUpdatedDateTime'];
        }
        if (isset($data['processingStatus'])) {
            $this->processingStatus = is_array($data['processingStatus']) ? new IdentityGovernanceLifecycleWorkflowProcessingStatus($data['processingStatus']) : $data['processingStatus'];
        }
        if (isset($data['runId'])) {
            $this->runId = $data['runId'];
        }
        if (isset($data['startedDateTime'])) {
            $this->startedDateTime = is_string($data['startedDateTime']) ? new \DateTimeImmutable($data['startedDateTime']) : $data['startedDateTime'];
        }
        if (isset($data['successfulUsersCount'])) {
            $this->successfulUsersCount = is_numeric($data['successfulUsersCount']) ? (float)$data['successfulUsersCount'] : $data['successfulUsersCount'];
        }
        if (isset($data['totalUsersCount'])) {
            $this->totalUsersCount = is_numeric($data['totalUsersCount']) ? (float)$data['totalUsersCount'] : $data['totalUsersCount'];
        }
        if (isset($data['unprocessedUsersCount'])) {
            $this->unprocessedUsersCount = is_numeric($data['unprocessedUsersCount']) ? (float)$data['unprocessedUsersCount'] : $data['unprocessedUsersCount'];
        }
        if (isset($data['task'])) {
            $this->task = is_array($data['task']) ? new IdentityGovernanceTask($data['task']) : $data['task'];
        }
        if (isset($data['taskDefinition'])) {
            $this->taskDefinition = is_array($data['taskDefinition']) ? new IdentityGovernanceTaskDefinition($data['taskDefinition']) : $data['taskDefinition'];
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
