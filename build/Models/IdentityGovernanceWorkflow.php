<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflow
 */
class IdentityGovernanceWorkflow
{
    /** Identifier used for individually addressing a specific workflow.Supports $filter(eq, ne) and $orderby. */
    public ?string $id = null;

    /**  */
    public ?IdentityGovernanceLifecycleWorkflowCategory $category = null;

    /** When a workflow was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** A string that describes the purpose of the workflow. */
    public ?string $description = null;

    /** A string to identify the workflow. */
    public ?string $displayName = null;

    /** 
     * Defines when and for who the workflow will run.
     * @var IdentityGovernanceWorkflowExecutionConditions|\stdClass|null
     */
    public mixed $executionConditions = null;

    /** Whether the workflow is enabled or disabled. If this setting is true, the workflow can be run on demand or on schedule when isSchedulingEnabled is true. */
    public ?bool $isEnabled = null;

    /** If true, the Lifecycle Workflow engine executes the workflow based on the schedule defined by tenant settings. Can't be true for a disabled workflow (where isEnabled is false). */
    public ?bool $isSchedulingEnabled = null;

    /** When the workflow was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The user who created the workflow.
     * @var User|\stdClass|null
     */
    public mixed $createdBy = null;

    /** 
     * The unique identifier of the Microsoft Entra identity that last modified the workflow.
     * @var User|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** 
     * The tasks in the workflow.
     * @var IdentityGovernanceTask[]
     */
    public array $tasks = [];

    /** When the workflow was deleted.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** The date time when the workflow is expected to run next based on the schedule interval, if there are any users matching the execution conditions. Supports $filter(lt,gt) and $orderby. */
    public ?\DateTimeInterface $nextScheduleRunDateTime = null;

    /** The current version number of the workflow. Value is 1 when the workflow is first created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?float $version = null;

    /** 
     * The unique identifier of the Microsoft Entra identity that last modified the workflow object.
     * @var IdentityGovernanceUserProcessingResult[]
     */
    public array $executionScope = [];

    /** 
     * Workflow runs.
     * @var IdentityGovernanceRun[]
     */
    public array $runs = [];

    /** 
     * Represents the aggregation of task execution data for tasks within a workflow object.
     * @var IdentityGovernanceTaskReport[]
     */
    public array $taskReports = [];

    /** 
     * Per-user workflow execution results.
     * @var IdentityGovernanceUserProcessingResult[]
     */
    public array $userProcessingResults = [];

    /** 
     * The workflow versions that are available.
     * @var IdentityGovernanceWorkflowVersion[]
     */
    public array $versions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['category'])) {
            $this->category = is_array($data['category']) ? new IdentityGovernanceLifecycleWorkflowCategory($data['category']) : $data['category'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['executionConditions'])) {
            $this->executionConditions = is_array($data['executionConditions']) ? new IdentityGovernanceWorkflowExecutionConditions($data['executionConditions']) : $data['executionConditions'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['isSchedulingEnabled'])) {
            $this->isSchedulingEnabled = $data['isSchedulingEnabled'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new User($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new User($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['tasks'])) {
            $this->tasks = $data['tasks'];
        }
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['nextScheduleRunDateTime'])) {
            $this->nextScheduleRunDateTime = is_string($data['nextScheduleRunDateTime']) ? new \DateTimeImmutable($data['nextScheduleRunDateTime']) : $data['nextScheduleRunDateTime'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['executionScope'])) {
            $this->executionScope = $data['executionScope'];
        }
        if (isset($data['runs'])) {
            $this->runs = $data['runs'];
        }
        if (isset($data['taskReports'])) {
            $this->taskReports = $data['taskReports'];
        }
        if (isset($data['userProcessingResults'])) {
            $this->userProcessingResults = $data['userProcessingResults'];
        }
        if (isset($data['versions'])) {
            $this->versions = $data['versions'];
        }
    }
}
