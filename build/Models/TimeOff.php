<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeOff
 */
class TimeOff
{
    /**
     * The draft version of this timeOff item that is viewable by managers. It must be shared before it's visible to team members. Required.
     */
    private ?string $draftTimeOff;

    /**
     * The timeOff is marked for deletion, a process that is finalized when the schedule is shared.
     */
    private ?bool $isStagedForDeletion;

    /**
     * The shared version of this timeOff that is viewable by both employees and managers. Updates to the sharedTimeOff property send notifications to users in the Teams client. Required.
     */
    private ?string $sharedTimeOff;

    /**
     * ID of the user assigned to the timeOff. Required.
     */
    private ?string $userId;


    public function getDraftTimeOff(): ?string
    {
        return $this->draftTimeOff;
    }

    public function setDraftTimeOff(?string $draftTimeOff): self
    {
        $this->draftTimeOff = $draftTimeOff;
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

    public function getSharedTimeOff(): ?string
    {
        return $this->sharedTimeOff;
    }

    public function setSharedTimeOff(?string $sharedTimeOff): self
    {
        $this->sharedTimeOff = $sharedTimeOff;
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
