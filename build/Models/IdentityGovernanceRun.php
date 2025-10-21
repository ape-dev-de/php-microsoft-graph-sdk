<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceRun
 */
class IdentityGovernanceRun
{
    public function __construct(
        /** The date time that the run completed. Value is null if the workflow hasn''t completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** The number of tasks that failed in the run execution. */
        public ?float $failedTasksCount = null,
        /** The number of users that failed in the run execution. */
        public ?float $failedUsersCount = null,
        /** The datetime that the run was last updated.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /**  */
        public ?string $processingStatus = null,
        /** The date time that the run is scheduled to be executed for a workflow.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $scheduledDateTime = null,
        /** The date time that the run execution started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $startedDateTime = null,
        /** The number of successfully completed users in the run. */
        public ?float $successfulUsersCount = null,
        /**  */
        public ?float $totalTasksCount = null,
        /** The total number of unprocessed tasks in the run execution. */
        public ?float $totalUnprocessedTasksCount = null,
        /** The total number of users in the workflow execution. */
        public ?float $totalUsersCount = null,
        /**  */
        public ?string $workflowExecutionType = null,
        /** The related taskProcessingResults. */
        public array $taskProcessingResults = [],
        /** @var string[] The associated individual user execution. */
        public array $userProcessingResults = []
    ) {}
}
