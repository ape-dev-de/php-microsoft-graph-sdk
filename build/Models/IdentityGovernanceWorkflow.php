<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflow
 */
class IdentityGovernanceWorkflow
{
    public function __construct(
        /** When the workflow was deleted.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** Identifier used for individually addressing a specific workflow.Supports $filter(eq, ne) and $orderby. */
        public ?string $id = null,
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
