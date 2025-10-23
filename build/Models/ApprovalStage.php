<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApprovalStage
 */
class ApprovalStage
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether the stage is assigned to the calling user to review. Read-only. */
    public ?bool $assignedToMe = null;

    /** The label provided by the policy creator to identify an approval stage. Read-only. */
    public ?string $displayName = null;

    /** The justification associated with the approval stage decision. */
    public ?string $justification = null;

    /** 
     * The identifier of the reviewer. 00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn't reviewed. Read-only.
     * @var Identity|\stdClass|null
     */
    public mixed $reviewedBy = null;

    /** The date and time when a decision was recorded. The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $reviewedDateTime = null;

    /** The result of this approval record. Possible values include: NotReviewed, Approved, Denied. */
    public ?string $reviewResult = null;

    /** The stage status. Possible values: InProgress, Initializing, Completed, Expired. Read-only. */
    public ?string $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['assignedToMe'])) {
            $this->assignedToMe = $data['assignedToMe'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['justification'])) {
            $this->justification = $data['justification'];
        }
        if (isset($data['reviewedBy'])) {
            $this->reviewedBy = $data['reviewedBy'];
        }
        if (isset($data['reviewedDateTime'])) {
            $this->reviewedDateTime = is_string($data['reviewedDateTime']) ? new \DateTimeImmutable($data['reviewedDateTime']) : $data['reviewedDateTime'];
        }
        if (isset($data['reviewResult'])) {
            $this->reviewResult = $data['reviewResult'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
