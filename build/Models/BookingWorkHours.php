<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingWorkHours
 */
class BookingWorkHours
{
    /**
     */
    private ?string $day;

    /**
     * This type represents the set of working hours in a single day of the week.
     */
    private ?string $timeSlots;

    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(?string $day): self
    {
        $this->day = $day;
        return $this;
    }

    public function getTimeSlots(): ?string
    {
        return $this->timeSlots;
    }

    public function setTimeSlots(?string $timeSlots): self
    {
        $this->timeSlots = $timeSlots;
        return $this;
    }

}
