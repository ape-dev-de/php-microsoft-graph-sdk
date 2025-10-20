<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ShiftItem
 */
class ShiftItem
{
    /**
     * An incremental part of a shift which can cover details of when and where an employee is during their shift. For example, an assignment or a scheduled break or lunch. Required.
     */
    private array $activities = [];

    /**
     * The shift label of the shiftItem.
     */
    private ?string $displayName;

    /**
     * The shift notes for the shiftItem.
     */
    private ?string $notes;

    public function getActivities(): array
    {
        return $this->activities;
    }

    public function setActivities(array $activities): self
    {
        $this->activities = $activities;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
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
