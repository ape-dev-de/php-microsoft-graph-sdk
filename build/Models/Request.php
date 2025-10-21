<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Request
 */
class Request
{
    /**
     * The identifier of the approval of the request.
     */
    private ?string $approvalId;

    /**
     * The request completion date time.
     */
    private ?\DateTimeInterface $completedDateTime;

    /**
     * The principal that created the request.
     */
    private ?string $createdBy;

    /**
     * The request creation date time.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Free text field to define any custom data for the request. Not used.
     */
    private ?string $customData;

    /**
     * The status of the request. Not nullable. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable.
     */
    private ?string $status;


    public function getApprovalId(): ?string
    {
        return $this->approvalId;
    }

    public function setApprovalId(?string $approvalId): self
    {
        $this->approvalId = $approvalId;
        return $this;
    }

    public function getCompletedDateTime(): ?\DateTimeInterface
    {
        return $this->completedDateTime;
    }

    public function setCompletedDateTime(?\DateTimeInterface $completedDateTime): self
    {
        $this->completedDateTime = $completedDateTime;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getCustomData(): ?string
    {
        return $this->customData;
    }

    public function setCustomData(?string $customData): self
    {
        $this->customData = $customData;
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
