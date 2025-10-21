<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApprovalStage
 */
class ApprovalStage
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Indicates whether the stage is assigned to the calling user to review. Read-only. */
        public ?bool $assignedToMe = null,
        /** The label provided by the policy creator to identify an approval stage. Read-only. */
        public ?string $displayName = null,
        /** The justification associated with the approval stage decision. */
        public ?string $justification = null,
        /** The identifier of the reviewer. 00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn't reviewed. Read-only. */
        public ?string $reviewedBy = null,
        /** The date and time when a decision was recorded. The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $reviewedDateTime = null,
        /** The result of this approval record. Possible values include: NotReviewed, Approved, Denied. */
        public ?string $reviewResult = null,
        /** The stage status. Possible values: InProgress, Initializing, Completed, Expired. Read-only. */
        public ?string $status = null
    ) {}
}
