<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleAssignmentScheduleInstance
 */
class UnifiedRoleAssignmentScheduleInstance
{
    /**
     * The type of the assignment that can either be Assigned or Activated. Supports $filter (eq, ne).
     */
    private ?string $assignmentType;

    /**
     * The end date of the schedule instance.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * How the assignment is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne).
     */
    private ?string $memberType;

    /**
     * The identifier of the role assignment in Microsoft Entra. Supports $filter (eq, ne).
     */
    private ?string $roleAssignmentOriginId;

    /**
     * The identifier of the unifiedRoleAssignmentSchedule object from which this instance was created. Supports $filter (eq, ne).
     */
    private ?string $roleAssignmentScheduleId;

    /**
     * When this instance starts.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * If the request is from an eligible administrator to activate a role, this parameter shows the related eligible assignment for that activation. Otherwise, it''s null. Supports $expand and $select nested in $expand.
     */
    private ?string $activatedUsing;


    public function getAssignmentType(): ?string
    {
        return $this->assignmentType;
    }

    public function setAssignmentType(?string $assignmentType): self
    {
        $this->assignmentType = $assignmentType;
        return $this;
    }

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

    public function getRoleAssignmentOriginId(): ?string
    {
        return $this->roleAssignmentOriginId;
    }

    public function setRoleAssignmentOriginId(?string $roleAssignmentOriginId): self
    {
        $this->roleAssignmentOriginId = $roleAssignmentOriginId;
        return $this;
    }

    public function getRoleAssignmentScheduleId(): ?string
    {
        return $this->roleAssignmentScheduleId;
    }

    public function setRoleAssignmentScheduleId(?string $roleAssignmentScheduleId): self
    {
        $this->roleAssignmentScheduleId = $roleAssignmentScheduleId;
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

    public function getActivatedUsing(): ?string
    {
        return $this->activatedUsing;
    }

    public function setActivatedUsing(?string $activatedUsing): self
    {
        $this->activatedUsing = $activatedUsing;
        return $this;
    }

}
