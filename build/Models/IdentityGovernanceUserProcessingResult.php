<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceUserProcessingResult
 */
class IdentityGovernanceUserProcessingResult
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date time that the workflow execution for a user completed. Value is null if the workflow hasn''t completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** The number of tasks that failed in the workflow execution. */
        public ?float $failedTasksCount = null,
        /**  */
        public ?string $processingStatus = null,
        /** The date time that the workflow is scheduled to be executed for a user.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $scheduledDateTime = null,
        /** The date time that the workflow execution started. Value is null if the workflow execution has not started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $startedDateTime = null,
        /** The total number of tasks that in the workflow execution. */
        public ?float $totalTasksCount = null,
        /** The total number of unprocessed tasks for the workflow. */
        public ?float $totalUnprocessedTasksCount = null,
        /**  */
        public ?string $workflowExecutionType = null,
        /** The version of the workflow that was executed. */
        public ?float $workflowVersion = null,
        /**  */
        public ?string $subject = null,
        /** @var string[] The associated individual task execution. */
        public array $taskProcessingResults = []
    ) {}
}
