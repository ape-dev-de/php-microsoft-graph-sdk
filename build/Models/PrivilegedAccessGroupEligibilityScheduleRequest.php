<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupEligibilityScheduleRequest
 */
class PrivilegedAccessGroupEligibilityScheduleRequest
{
    /**
     * The identifier of membership or ownership eligibility relationship to the group. Required. The possible values are: owner, member, unknownFutureValue.
     */
    private ?string $accessId;

    /**
     * The identifier of the group representing the scope of the membership and ownership eligibility through PIM for Groups. Required.
     */
    private ?string $groupId;

    /**
     * The identifier of the principal whose membership or ownership eligibility to the group is managed through PIM for Groups. Required.
     */
    private ?string $principalId;

    /**
     * The identifier of the schedule that's created from the eligibility request. Optional.
     */
    private ?string $targetScheduleId;

    /**
     * References the group that is the scope of the membership or ownership eligibility request through PIM for Groups. Supports $expand and $select nested in $expand for select properties like id, displayName, and mail.
     */
    private ?string $group;

    /**
     * References the principal that's in the scope of the membership or ownership eligibility request through the group that's governed by PIM. Supports $expand and $select nested in $expand for id only.
     */
    private ?string $principal;

    /**
     * Schedule created by this request.
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
