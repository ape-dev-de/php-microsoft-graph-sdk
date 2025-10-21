<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StandardTimeZoneOffset
 */
class StandardTimeZoneOffset
{
    /**
     * Represents the nth occurrence of the day of week that the transition from daylight saving time to standard time occurs.
     */
    private ?float $dayOccurrence;

    /**
     * Represents the day of the week when the transition from daylight saving time to standard time.
     */
    private ?string $dayOfWeek;

    /**
     * Represents the month of the year when the transition from daylight saving time to standard time occurs.
     */
    private ?float $month;

    /**
     * Represents the time of day when the transition from daylight saving time to standard time occurs.
     */
    private ?string $time;

    /**
     * Represents how frequently in terms of years the change from daylight saving time to standard time occurs. For example, a value of 0 means every year.
     */
    private ?string $year;


    public function getDayOccurrence(): ?float
    {
        return $this->dayOccurrence;
    }

    public function setDayOccurrence(?float $dayOccurrence): self
    {
        $this->dayOccurrence = $dayOccurrence;
        return $this;
    }

    public function getDayOfWeek(): ?string
    {
        return $this->dayOfWeek;
    }

    public function setDayOfWeek(?string $dayOfWeek): self
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    public function getMonth(): ?float
    {
        return $this->month;
    }

    public function setMonth(?float $month): self
    {
        $this->month = $month;
        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(?string $time): self
    {
        $this->time = $time;
        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(?string $year): self
    {
        $this->year = $year;
        return $this;
    }

}
