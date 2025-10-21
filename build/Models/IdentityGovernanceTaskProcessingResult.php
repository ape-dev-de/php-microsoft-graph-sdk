<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTaskProcessingResult
 */
class IdentityGovernanceTaskProcessingResult
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date time when taskProcessingResult execution ended. Value is null if task execution is still in progress.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** The date time when the taskProcessingResult was created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Describes why the taskProcessingResult has failed. */
        public ?string $failureReason = null,
        /**  */
        public ?string $processingStatus = null,
        /** The date time when taskProcessingResult execution started. Value is null if task execution has not yet started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?\DateTimeInterface $startedDateTime = null,
        /**  */
        public ?string $subject = null,
        /**  */
        public ?string $task = null
    ) {}
}
