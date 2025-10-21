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
     * @var string[]
     */
    private array $timeSlots = [];


    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(?string $day): self
    {
        $this->day = $day;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTimeSlots(): array
    {
        return $this->timeSlots;
    }

    /**
     * @param string[] $timeSlots
     */
    public function setTimeSlots(array $timeSlots): self
    {
        $this->timeSlots = $timeSlots;
        return $this;
    }

}
