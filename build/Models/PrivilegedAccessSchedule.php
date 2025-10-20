<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessSchedule
 */
class PrivilegedAccessSchedule
{
    /**
     * When the schedule was created. Optional.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The identifier of the access assignment or eligibility request that created this schedule. Optional.
     */
    private ?string $createdUsing;

    /**
     * When the schedule was last modified. Optional.
     */
    private ?\DateTimeInterface $modifiedDateTime;

    /**
     * Represents the period of the access assignment or eligibility. The scheduleInfo can represent a single occurrence or multiple recurring instances. Required.
     */
    private ?string $scheduleInfo;

    /**
     * The status of the access assignment or eligibility request. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. Optional.
     */
    private ?string $status;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getCreatedUsing(): ?string
    {
        return $this->createdUsing;
    }

    public function setCreatedUsing(?string $createdUsing): self
    {
        $this->createdUsing = $createdUsing;
        return $this;
    }

    public function getModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->modifiedDateTime;
    }

    public function setModifiedDateTime(?\DateTimeInterface $modifiedDateTime): self
    {
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }

    public function getScheduleInfo(): ?string
    {
        return $this->scheduleInfo;
    }

    public function setScheduleInfo(?string $scheduleInfo): self
    {
        $this->scheduleInfo = $scheduleInfo;
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
