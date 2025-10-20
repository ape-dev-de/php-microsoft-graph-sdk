<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleEligibilityScheduleInstance
 */
class UnifiedRoleEligibilityScheduleInstance
{
    /**
     * The end date of the schedule instance.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * How the role eligibility is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleEligibilitySchedule can be managed by the caller. Supports $filter (eq, ne).
     */
    private ?string $memberType;

    /**
     * The identifier of the unifiedRoleEligibilitySchedule object from which this instance was created. Supports $filter (eq, ne).
     */
    private ?string $roleEligibilityScheduleId;

    /**
     * When this instance starts.
     */
    private ?\DateTimeInterface $startDateTime;

    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getMemberType(): ?string
    {
        return $this->memberType;
    }

    public function setMemberType(?string $memberType): self
    {
        $this->memberType = $memberType;
        return $this;
    }

    public function getRoleEligibilityScheduleId(): ?string
    {
        return $this->roleEligibilityScheduleId;
    }

    public function setRoleEligibilityScheduleId(?string $roleEligibilityScheduleId): self
    {
        $this->roleEligibilityScheduleId = $roleEligibilityScheduleId;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

}
