<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApprovalStage
 */
class ApprovalStage
{
    /**
     * Indicates whether the stage is assigned to the calling user to review. Read-only.
     */
    private ?bool $assignedToMe;

    /**
     * The label provided by the policy creator to identify an approval stage. Read-only.
     */
    private ?string $displayName;

    /**
     * The justification associated with the approval stage decision.
     */
    private ?string $justification;

    /**
     * The identifier of the reviewer. 00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn't reviewed. Read-only.
     */
    private ?string $reviewedBy;

    /**
     * The date and time when a decision was recorded. The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $reviewedDateTime;

    /**
     * The result of this approval record. Possible values include: NotReviewed, Approved, Denied.
     */
    private ?string $reviewResult;

    /**
     * The stage status. Possible values: InProgress, Initializing, Completed, Expired. Read-only.
     */
    private ?string $status;


    public function getAssignedToMe(): ?bool
    {
        return $this->assignedToMe;
    }

    public function setAssignedToMe(?bool $assignedToMe): self
    {
        $this->assignedToMe = $assignedToMe;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getJustification(): ?string
    {
        return $this->justification;
    }

    public function setJustification(?string $justification): self
    {
        $this->justification = $justification;
        return $this;
    }

    public function getReviewedBy(): ?string
    {
        return $this->reviewedBy;
    }

    public function setReviewedBy(?string $reviewedBy): self
    {
        $this->reviewedBy = $reviewedBy;
        return $this;
    }

    public function getReviewedDateTime(): ?\DateTimeInterface
    {
        return $this->reviewedDateTime;
    }

    public function setReviewedDateTime(?\DateTimeInterface $reviewedDateTime): self
    {
        $this->reviewedDateTime = $reviewedDateTime;
        return $this;
    }

    public function getReviewResult(): ?string
    {
        return $this->reviewResult;
    }

    public function setReviewResult(?string $reviewResult): self
    {
        $this->reviewResult = $reviewResult;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
