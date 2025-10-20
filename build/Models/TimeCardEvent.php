<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCardEvent
 */
class TimeCardEvent
{
    /**
     * The time the entry is recorded.
     */
    private ?\DateTimeInterface $dateTime;

    /**
     * Indicates whether this action happens at an approved location.
     */
    private ?bool $isAtApprovedLocation;

    /**
     * Notes about the timeCardEvent.
     */
    private ?string $notes;

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->dateTime;
    }

    public function setDateTime(?\DateTimeInterface $dateTime): self
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    public function getIsAtApprovedLocation(): ?bool
    {
        return $this->isAtApprovedLocation;
    }

    public function setIsAtApprovedLocation(?bool $isAtApprovedLocation): self
    {
        $this->isAtApprovedLocation = $isAtApprovedLocation;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;
        return $this;
    }

}
