<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflow
 */
class IdentityGovernanceWorkflow
{
    public function __construct(
        /** Identifier used for individually addressing a specific workflow.Supports $filter(eq, ne) and $orderby. */
        public ?string $id = null,
        /**  */
        public ?string $category = null,
        /** When a workflow was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** A string that describes the purpose of the workflow. */
        public ?string $description = null,
        /** A string to identify the workflow. */
        public ?string $displayName = null,
        /** Defines when and for who the workflow will run. */
        public ?string $executionConditions = null,
        /** Whether the workflow is enabled or disabled. If this setting is true, the workflow can be run on demand or on schedule when isSchedulingEnabled is true. */
        public ?bool $isEnabled = null,
        /** If true, the Lifecycle Workflow engine executes the workflow based on the schedule defined by tenant settings. Can''t be true for a disabled workflow (where isEnabled is false). */
        public ?bool $isSchedulingEnabled = null,
        /** When the workflow was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The user who created the workflow. */
        public ?string $createdBy = null,
        /** The unique identifier of the Microsoft Entra identity that last modified the workflow. */
        public ?string $lastModifiedBy = null,
        /** @var string[] The tasks in the workflow. */
        public array $tasks = [],
        /** When the workflow was deleted.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** The date time when the workflow is expected to run next based on the schedule interval, if there are any users matching the execution conditions. Supports $filter(lt,gt) and $orderby. */
        public ?\DateTimeInterface $nextScheduleRunDateTime = null,
        /** The current version number of the workflow. Value is 1 when the workflow is first created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?float $version = null,
        /** The unique identifier of the Microsoft Entra identity that last modified the workflow object. */
        public array $executionScope = [],
        /** Workflow runs. */
        public array $runs = [],
        /** Represents the aggregation of task execution data for tasks within a workflow object. */
        public array $taskReports = [],
        /** Per-user workflow execution results. */
        public array $userProcessingResults = [],
        /** @var string[] The workflow versions that are available. */
        public array $versions = []
    ) {}
}
