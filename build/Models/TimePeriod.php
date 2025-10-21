<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimePeriod
 */
class TimePeriod
{
    /**
     * The date time of the end of the time period.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * The date time of the start of the time period.
     */
    private ?\DateTimeInterface $startDateTime;


    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

}
