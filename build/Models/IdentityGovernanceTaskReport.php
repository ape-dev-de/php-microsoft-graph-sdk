<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTaskReport
 */
class IdentityGovernanceTaskReport
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date time that the associated run completed. Value is null if the run has not completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** The number of users in the run execution for which the associated task failed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?float $failedUsersCount = null,
        /** The date and time that the task report was last updated. */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /**  */
        public ?IdentityGovernanceLifecycleWorkflowProcessingStatus $processingStatus = null,
        /** The unique identifier of the associated run. */
        public ?string $runId = null,
        /** The date time that the associated run started. Value is null if the run has not started. */
        public ?\DateTimeInterface $startedDateTime = null,
        /** The number of users in the run execution for which the associated task succeeded.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?float $successfulUsersCount = null,
        /** The total number of users in the run execution for which the associated task was scheduled to execute.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?float $totalUsersCount = null,
        /** The number of users in the run execution for which the associated task is queued, in progress, or canceled.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?float $unprocessedUsersCount = null,
        /**  */
        public ?IdentityGovernanceTask $task = null,
        /**  */
        public ?IdentityGovernanceTaskDefinition $taskDefinition = null,
        /** The related lifecycle workflow taskProcessingResults. */
        public array $taskProcessingResults = []
    ) {}
}
