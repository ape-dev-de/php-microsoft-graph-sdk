<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DateTimeTimeZone
 */
class DateTimeTimeZone
{
    /**
     * A single point of time in a combined date and time representation ({date}T{time}; for example, 2017-08-29T04:00:00.0000000).
     */
    private ?string $dateTime;

    /**
     * Represents a time zone, for example, ''Pacific Standard Time''. See below for more possible values.
     */
    private ?string $timeZone;

    public function getDateTime(): ?string
    {
        return $this->dateTime;
    }

    public function setDateTime(?string $dateTime): self
    {
        $this->dateTime = $dateTime;
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
