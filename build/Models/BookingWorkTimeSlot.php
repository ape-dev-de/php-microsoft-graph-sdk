<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingWorkTimeSlot
 */
class BookingWorkTimeSlot
{
    /**
     * The time of the day when work stops. For example, 17:00:00.0000000.
     */
    private ?string $endTime;

    /**
     * The time of the day when work starts. For example, 08:00:00.0000000.
     */
    private ?string $startTime;


    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

}
