<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OpenShift
 */
class OpenShift
{
    /**
     * Draft changes in the openShift are only visible to managers until they're shared.
     */
    private ?string $draftOpenShift;

    /**
     * The openShift is marked for deletion, a process that is finalized when the schedule is shared.
     */
    private ?bool $isStagedForDeletion;

    /**
     * The ID of the schedulingGroup that contains the openShift.
     */
    private ?string $schedulingGroupId;

    /**
     * The shared version of this openShift that is viewable by both employees and managers.
     */
    private ?string $sharedOpenShift;


    public function getDraftOpenShift(): ?string
    {
        return $this->draftOpenShift;
    }

    public function setDraftOpenShift(?string $draftOpenShift): self
    {
        $this->draftOpenShift = $draftOpenShift;
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

    public function getSharedOpenShift(): ?string
    {
        return $this->sharedOpenShift;
    }

    public function setSharedOpenShift(?string $sharedOpenShift): self
    {
        $this->sharedOpenShift = $sharedOpenShift;
        return $this;
    }

}
