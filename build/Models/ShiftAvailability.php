<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ShiftAvailability
 */
class ShiftAvailability
{
    /**
     * Specifies the pattern for recurrence
     */
    private ?string $recurrence;

    /**
     * The time slot(s) preferred by the user.
     */
    private array $timeSlots = [];

    /**
     * Specifies the time zone for the indicated time.
     */
    private ?string $timeZone;


    public function getRecurrence(): ?string
    {
        return $this->recurrence;
    }

    public function setRecurrence(?string $recurrence): self
    {
        $this->recurrence = $recurrence;
        return $this;
    }

    public function getTimeSlots(): array
    {
        return $this->timeSlots;
    }

    public function setTimeSlots(array $timeSlots): self
    {
        $this->timeSlots = $timeSlots;
        return $this;
    }

    public function getTimeZone(): ?string
    {
        return $this->timeZone;
    }

    public function setTimeZone(?string $timeZone): self
    {
        $this->timeZone = $timeZone;
        return $this;
    }

}
