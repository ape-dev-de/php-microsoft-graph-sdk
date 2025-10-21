<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeRange
 */
class TimeRange
{
    /**
     * End time for the time range.
     */
    private ?string $endTime;

    /**
     * Start time for the time range.
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
