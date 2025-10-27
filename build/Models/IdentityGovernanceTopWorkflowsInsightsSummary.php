<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTopWorkflowsInsightsSummary
 */
class IdentityGovernanceTopWorkflowsInsightsSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Count of failed runs for workflow. */
    public ?float $failedRuns = null;

    /** Count of failed users who were processed. */
    public ?float $failedUsers = null;

    /** Count of successful runs of the workflow. */
    public ?float $successfulRuns = null;

    /** Count of successful users processed by the workflow. */
    public ?float $successfulUsers = null;

    /** Count of total runs of workflow. */
    public ?float $totalRuns = null;

    /** Total number of users processed by the workflow. */
    public ?float $totalUsers = null;

    /**  */
    public ?IdentityGovernanceLifecycleWorkflowCategory $workflowCategory = null;

    /** The name of the workflow. */
    public ?string $workflowDisplayName = null;

    /** The workflow ID. */
    public ?string $workflowId = null;

    /** The version of the workflow that was a top workflow ran. */
    public ?float $workflowVersion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['failedRuns'])) {
            $this->failedRuns = is_numeric($data['failedRuns']) ? (float)$data['failedRuns'] : $data['failedRuns'];
        }
        if (isset($data['failedUsers'])) {
            $this->failedUsers = is_numeric($data['failedUsers']) ? (float)$data['failedUsers'] : $data['failedUsers'];
        }
        if (isset($data['successfulRuns'])) {
            $this->successfulRuns = is_numeric($data['successfulRuns']) ? (float)$data['successfulRuns'] : $data['successfulRuns'];
        }
        if (isset($data['successfulUsers'])) {
            $this->successfulUsers = is_numeric($data['successfulUsers']) ? (float)$data['successfulUsers'] : $data['successfulUsers'];
        }
        if (isset($data['totalRuns'])) {
            $this->totalRuns = is_numeric($data['totalRuns']) ? (float)$data['totalRuns'] : $data['totalRuns'];
        }
        if (isset($data['totalUsers'])) {
            $this->totalUsers = is_numeric($data['totalUsers']) ? (float)$data['totalUsers'] : $data['totalUsers'];
        }
        if (isset($data['workflowCategory'])) {
            $this->workflowCategory = is_string($data['workflowCategory']) ? IdentityGovernanceLifecycleWorkflowCategory::tryFrom($data['workflowCategory']) : $data['workflowCategory'];
        }
        if (isset($data['workflowDisplayName'])) {
            $this->workflowDisplayName = $data['workflowDisplayName'];
        }
        if (isset($data['workflowId'])) {
            $this->workflowId = $data['workflowId'];
        }
        if (isset($data['workflowVersion'])) {
            $this->workflowVersion = is_numeric($data['workflowVersion']) ? (float)$data['workflowVersion'] : $data['workflowVersion'];
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
