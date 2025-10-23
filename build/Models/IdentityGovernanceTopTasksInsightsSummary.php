<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTopTasksInsightsSummary
 */
class IdentityGovernanceTopTasksInsightsSummary
{
    /** Count of failed runs of the task. */
    public ?float $failedTasks = null;

    /** Count of failed users who were processed by the task. */
    public ?float $failedUsers = null;

    /** Count of successful runs of the task. */
    public ?float $successfulTasks = null;

    /** Count of successful users processed by the task. */
    public ?float $successfulUsers = null;

    /** The name of the task. */
    public ?string $taskDefinitionDisplayName = null;

    /** The task ID. */
    public ?string $taskDefinitionId = null;

    /** Count of total runs of the task. */
    public ?float $totalTasks = null;

    /** Count of total users processed by the task. */
    public ?float $totalUsers = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['failedTasks'])) {
            $this->failedTasks = $data['failedTasks'];
        }
        if (isset($data['failedUsers'])) {
            $this->failedUsers = $data['failedUsers'];
        }
        if (isset($data['successfulTasks'])) {
            $this->successfulTasks = $data['successfulTasks'];
        }
        if (isset($data['successfulUsers'])) {
            $this->successfulUsers = $data['successfulUsers'];
        }
        if (isset($data['taskDefinitionDisplayName'])) {
            $this->taskDefinitionDisplayName = $data['taskDefinitionDisplayName'];
        }
        if (isset($data['taskDefinitionId'])) {
            $this->taskDefinitionId = $data['taskDefinitionId'];
        }
        if (isset($data['totalTasks'])) {
            $this->totalTasks = $data['totalTasks'];
        }
        if (isset($data['totalUsers'])) {
            $this->totalUsers = $data['totalUsers'];
        }
    }
}
