<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleAssignmentSchedule
 */
class UnifiedRoleAssignmentSchedule
{
    /**
     * The type of the assignment that can either be Assigned or Activated. Supports $filter (eq, ne).
     */
    private ?string $assignmentType;

    /**
     * How the assignment is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne).
     */
    private ?string $memberType;

    /**
     * The period of the role assignment. It can represent a single occurrence or multiple recurrences.
     */
    private ?string $scheduleInfo;

    /**
     * If the request is from an eligible administrator to activate a role, this parameter shows the related eligible assignment for that activation. Otherwise, it''s null. Supports $expand.
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

    public function getMemberType(): ?string
    {
        return $this->memberType;
    }

    public function setMemberType(?string $memberType): self
    {
        $this->memberType = $memberType;
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
