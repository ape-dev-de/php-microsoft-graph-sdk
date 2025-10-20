<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecureScoreControlStateUpdate
 */
class SecureScoreControlStateUpdate
{
    /**
     * Assigns the control to the user who will take the action.
     */
    private ?string $assignedTo;

    /**
     * Provides optional comment about the control.
     */
    private ?string $comment;

    /**
     * State of the control, which can be modified via a PATCH command (for example, ignored, thirdParty).
     */
    private ?string $state;

    /**
     * ID of the user who updated tenant state.
     */
    private ?string $updatedBy;

    /**
     * Time at which the control state was updated.
     */
    private ?\DateTimeInterface $updatedDateTime;

    public function getAssignedTo(): ?string
    {
        return $this->assignedTo;
    }

    public function setAssignedTo(?string $assignedTo): self
    {
        $this->assignedTo = $assignedTo;
        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?string $updatedBy): self
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }

    public function getUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->updatedDateTime;
    }

    public function setUpdatedDateTime(?\DateTimeInterface $updatedDateTime): self
    {
        $this->updatedDateTime = $updatedDateTime;
        return $this;
    }

}
