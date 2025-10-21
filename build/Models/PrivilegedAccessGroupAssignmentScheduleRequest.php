<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupAssignmentScheduleRequest
 */
class PrivilegedAccessGroupAssignmentScheduleRequest
{
    /**
     * The identifier of a membership or ownership assignment relationship to the group. Required. The possible values are: owner, member, unknownFutureValue.
     */
    private ?string $accessId;

    /**
     * The identifier of the group representing the scope of the membership or ownership assignment through PIM for Groups. Required.
     */
    private ?string $groupId;

    /**
     * The identifier of the principal whose membership or ownership assignment to the group is managed through PIM for Groups. Supports $filter (eq, ne).
     */
    private ?string $principalId;

    /**
     * The identifier of the schedule that''s created from the membership or ownership assignment request. Supports $filter (eq, ne).
     */
    private ?string $targetScheduleId;

    /**
     * When the request activates a membership or ownership assignment in PIM for Groups, this object represents the eligibility policy for the group. Otherwise, it is null. Supports $expand.
     */
    private ?string $activatedUsing;

    /**
     * References the group that is the scope of the membership or ownership assignment request through PIM for Groups. Supports $expand and $select nested in $expand for select properties like id, displayName, and mail.
     */
    private ?string $group;

    /**
     * References the principal that's in the scope of this membership or ownership assignment request through the group that's governed by PIM. Supports $expand and $select nested in $expand for id only.
     */
    private ?string $principal;

    /**
     * Schedule created by this request. Supports $expand.
     */
    private ?string $targetSchedule;


    public function getAccessId(): ?string
    {
        return $this->accessId;
    }

    public function setAccessId(?string $accessId): self
    {
        $this->accessId = $accessId;
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

    public function getPrincipalId(): ?string
    {
        return $this->principalId;
    }

    public function setPrincipalId(?string $principalId): self
    {
        $this->principalId = $principalId;
        return $this;
    }

    public function getTargetScheduleId(): ?string
    {
        return $this->targetScheduleId;
    }

    public function setTargetScheduleId(?string $targetScheduleId): self
    {
        $this->targetScheduleId = $targetScheduleId;
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

    public function getTargetSchedule(): ?string
    {
        return $this->targetSchedule;
    }

    public function setTargetSchedule(?string $targetSchedule): self
    {
        $this->targetSchedule = $targetSchedule;
        return $this;
    }

}
