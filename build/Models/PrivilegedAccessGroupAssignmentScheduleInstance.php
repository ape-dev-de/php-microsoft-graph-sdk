<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupAssignmentScheduleInstance
 */
class PrivilegedAccessGroupAssignmentScheduleInstance
{
    /**
     * The identifier of the membership or ownership assignment relationship to the group. Required. The possible values are: owner, member,  unknownFutureValue. Supports $filter (eq).
     */
    private ?string $accessId;

    /**
     * The identifier of the privilegedAccessGroupAssignmentSchedule from which this instance was created. Required. Supports $filter (eq, ne).
     */
    private ?string $assignmentScheduleId;

    /**
     * Indicates whether the membership or ownership assignment is granted through activation of an eligibility or through direct assignment. Required. The possible values are: assigned, activated, unknownFutureValue. Supports $filter (eq).
     */
    private ?string $assignmentType;

    /**
     * The identifier of the group representing the scope of the membership or ownership assignment through PIM for Groups. Optional. Supports $filter (eq).
     */
    private ?string $groupId;

    /**
     * Indicates whether the assignment is derived from a group assignment. It can further imply whether the caller can manage the assignment schedule. Required. The possible values are: direct, group, unknownFutureValue. Supports $filter (eq).
     */
    private ?string $memberType;

    /**
     * The identifier of the principal whose membership or ownership assignment to the group is managed through PIM for Groups. Required. Supports $filter (eq).
     */
    private ?string $principalId;

    /**
     * When the request activates a membership or ownership in PIM for Groups, this object represents the eligibility request for the group. Otherwise, it is null.
     */
    private ?string $activatedUsing;

    /**
     * References the group that is the scope of the membership or ownership assignment through PIM for Groups. Supports $expand.
     */
    private ?string $group;

    /**
     * References the principal that's in the scope of the membership or ownership assignment request through the group that's governed by PIM. Supports $expand.
     */
    private ?string $principal;


    public function getAccessId(): ?string
    {
        return $this->accessId;
    }

    public function setAccessId(?string $accessId): self
    {
        $this->accessId = $accessId;
        return $this;
    }

    public function getAssignmentScheduleId(): ?string
    {
        return $this->assignmentScheduleId;
    }

    public function setAssignmentScheduleId(?string $assignmentScheduleId): self
    {
        $this->assignmentScheduleId = $assignmentScheduleId;
        return $this;
    }

    public function getAssignmentType(): ?string
    {
        return $this->assignmentType;
    }

    public function setAssignmentType(?string $assignmentType): self
    {
        $this->assignmentType = $assignmentType;
        return $this;
    }

    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;
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

    public function getPrincipalId(): ?string
    {
        return $this->principalId;
    }

    public function setPrincipalId(?string $principalId): self
    {
        $this->principalId = $principalId;
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

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(?string $group): self
    {
        $this->group = $group;
        return $this;
    }

    public function getPrincipal(): ?string
    {
        return $this->principal;
    }

    public function setPrincipal(?string $principal): self
    {
        $this->principal = $principal;
        return $this;
    }

}
