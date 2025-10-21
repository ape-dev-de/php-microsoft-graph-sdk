<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Shift
 */
class Shift
{
    /**
     * Draft changes in the shift. Draft changes are only visible to managers. The changes are visible to employees when they''re shared, which copies the changes from the draftShift to the sharedShift property.
     */
    private ?string $draftShift;

    /**
     * The shift is marked for deletion, a process that is finalized when the schedule is shared.
     */
    private ?bool $isStagedForDeletion;

    /**
     * ID of the scheduling group the shift is part of. Required.
     */
    private ?string $schedulingGroupId;

    /**
     * The shared version of this shift that is viewable by both employees and managers. Updates to the sharedShift property send notifications to users in the Teams client.
     */
    private ?string $sharedShift;

    /**
     * ID of the user assigned to the shift. Required.
     */
    private ?string $userId;


    public function getDraftShift(): ?string
    {
        return $this->draftShift;
    }

    public function setDraftShift(?string $draftShift): self
    {
        $this->draftShift = $draftShift;
        return $this;
    }

    public function getIsStagedForDeletion(): ?bool
    {
        return $this->isStagedForDeletion;
    }

    public function setIsStagedForDeletion(?bool $isStagedForDeletion): self
    {
        $this->isStagedForDeletion = $isStagedForDeletion;
        return $this;
    }

    public function getSchedulingGroupId(): ?string
    {
        return $this->schedulingGroupId;
    }

    public function setSchedulingGroupId(?string $schedulingGroupId): self
    {
        $this->schedulingGroupId = $schedulingGroupId;
        return $this;
    }

    public function getSharedShift(): ?string
    {
        return $this->sharedShift;
    }

    public function setSharedShift(?string $sharedShift): self
    {
        $this->sharedShift = $sharedShift;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

}
