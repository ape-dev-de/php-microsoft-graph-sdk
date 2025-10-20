<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCardEntry
 */
class TimeCardEntry
{
    /**
     * The clock-in event of the timeCard.
     */
    private array $breaks = [];

    /**
     * The clock-out event of the timeCard.
     */
    private ?string $clockInEvent;

    /**
     * The list of breaks associated with the timeCard.
     */
    private ?string $clockOutEvent;

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

}
