<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCardBreak
 */
class TimeCardBreak
{
    /**
     * ID of the timeCardBreak.
     */
    private ?string $breakId;

    /**
     * The start event of the timeCardBreak.
     */
    private ?string $end;

    /**
     * Notes about the timeCardBreak.
     */
    private ?string $notes;

    /**
     */
    private ?string $start;

    public function getBreakId(): ?string
    {
        return $this->breakId;
    }

    public function setBreakId(?string $breakId): self
    {
        $this->breakId = $breakId;
        return $this;
    }

    public function getEnd(): ?string
    {
        return $this->end;
    }

    public function setEnd(?string $end): self
    {
        $this->end = $end;
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

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(?string $start): self
    {
        $this->start = $start;
        return $this;
    }

}
