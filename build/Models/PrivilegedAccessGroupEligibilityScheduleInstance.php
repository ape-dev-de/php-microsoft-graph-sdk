<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupEligibilityScheduleInstance
 */
class PrivilegedAccessGroupEligibilityScheduleInstance
{
    /**
     * The identifier of the membership or ownership eligibility relationship to the group. Required. The possible values are: owner, member. Supports $filter (eq).
     */
    private ?string $accessId;

    /**
     * The identifier of the privilegedAccessGroupEligibilitySchedule from which this instance was created. Required. Supports $filter (eq, ne).
     */
    private ?string $eligibilityScheduleId;

    /**
     * The identifier of the group representing the scope of the membership or ownership eligibility through PIM for Groups. Required. Supports $filter (eq).
     */
    private ?string $groupId;

    /**
     * Indicates whether the assignment is derived from a group assignment. It can further imply whether the calling principal can manage the assignment schedule. Required. The possible values are: direct, group, unknownFutureValue. Supports $filter (eq).
     */
    private ?string $memberType;

    /**
     * The identifier of the principal whose membership or ownership eligibility to the group is managed through PIM for Groups. Required. Supports $filter (eq).
     */
    private ?string $principalId;

    /**
     * References the group that is the scope of the membership or ownership eligibility through PIM for Groups. Supports $expand.
     */
    private ?string $group;

    /**
     * References the principal that's in the scope of the membership or ownership eligibility request through the group that's governed by PIM. Supports $expand.
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

    public function getEligibilityScheduleId(): ?string
    {
        return $this->eligibilityScheduleId;
    }

    public function setEligibilityScheduleId(?string $eligibilityScheduleId): self
    {
        $this->eligibilityScheduleId = $eligibilityScheduleId;
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
