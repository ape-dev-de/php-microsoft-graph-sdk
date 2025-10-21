<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupAssignmentSchedule
 */
class PrivilegedAccessGroupAssignmentSchedule
{
    /**
     * The identifier of the membership or ownership assignment to the group that is governed through PIM. Required. The possible values are: owner, member, unknownFutureValue. Supports $filter (eq).
     */
    private ?string $accessId;

    /**
     * Indicates whether the membership or ownership assignment for the principal is granted through activation or direct assignment. Required. The possible values are: assigned, activated, unknownFutureValue. Supports $filter (eq).
     */
    private ?string $assignmentType;

    /**
     * The identifier of the group representing the scope of the membership or ownership assignment through PIM for Groups. Required. Supports $filter (eq).
     */
    private ?string $groupId;

    /**
     * Indicates whether the assignment is derived from a direct group assignment or through a transitive assignment. The possible values are: direct, group, unknownFutureValue. Supports $filter (eq).
     */
    private ?string $memberType;

    /**
     * The identifier of the principal whose membership or ownership assignment is granted through PIM for Groups. Required. Supports $filter (eq).
     */
    private ?string $principalId;

    /**
     * When the request activates an ownership or membership assignment in PIM for Groups, this object represents the eligibility relationship. Otherwise, it''s null. Supports $expand.
     */
    private ?string $activatedUsing;

    /**
     * References the group that is the scope of the membership or ownership assignment through PIM for Groups. Supports $expand and $select nested in $expand for select properties like id, displayName, and mail.
     */
    private ?string $group;

    /**
     * References the principal that's in the scope of this membership or ownership assignment request to the group that's governed through PIM. Supports $expand and $select nested in $expand for id only.
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
