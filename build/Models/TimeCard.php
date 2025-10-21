<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCard
 */
class TimeCard
{
    /**
     * The list of breaks associated with the timeCard.
     */
    private array $breaks = [];

    /**
     * The clock-in event of the timeCard.
     */
    private ?string $clockInEvent;

    /**
     * The clock-out event of the timeCard.
     */
    private ?string $clockOutEvent;

    /**
     * Indicates whether this timeCard entry is confirmed. Possible values are: none, user, manager, unknownFutureValue.
     */
    private ?string $confirmedBy;

    /**
     * Notes about the timeCard.
     */
    private ?string $notes;

    /**
     * The original timeCardEntry of the timeCard before it was edited.
     */
    private ?string $originalEntry;

    /**
     * The current state of the timeCard during its life cycle. The possible values are: clockedIn, onBreak, clockedOut, unknownFutureValue.
     */
    private ?string $state;

    /**
     * User ID to which the timeCard belongs.
     */
    private ?string $userId;


    public function getBreaks(): array
    {
        return $this->breaks;
    }

    public function setBreaks(array $breaks): self
    {
        $this->breaks = $breaks;
        return $this;
    }

    public function getClockInEvent(): ?string
    {
        return $this->clockInEvent;
    }

    public function setClockInEvent(?string $clockInEvent): self
    {
        $this->clockInEvent = $clockInEvent;
        return $this;
    }

    public function getClockOutEvent(): ?string
    {
        return $this->clockOutEvent;
    }

    public function setClockOutEvent(?string $clockOutEvent): self
    {
        $this->clockOutEvent = $clockOutEvent;
        return $this;
    }

    public function getConfirmedBy(): ?string
    {
        return $this->confirmedBy;
    }

    public function setConfirmedBy(?string $confirmedBy): self
    {
        $this->confirmedBy = $confirmedBy;
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

    public function getOriginalEntry(): ?string
    {
        return $this->originalEntry;
    }

    public function setOriginalEntry(?string $originalEntry): self
    {
        $this->originalEntry = $originalEntry;
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
