<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecurrencePattern
 */
class RecurrencePattern
{
    /**
     * The day of the month on which the event occurs. Required if type is absoluteMonthly or absoluteYearly.
     */
    private ?float $dayOfMonth;

    /**
     * A collection of the days of the week on which the event occurs. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. If type is relativeMonthly or relativeYearly, and daysOfWeek specifies more than one day, the event falls on the first day that satisfies the pattern.  Required if type is weekly, relativeMonthly, or relativeYearly.
     */
    private array $daysOfWeek = [];

    /**
     * The first day of the week. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. Default is sunday. Required if type is weekly.
     */
    private ?string $firstDayOfWeek;

    /**
     * Specifies on which instance of the allowed days specified in daysOfWeek the event occurs, counted from the first instance in the month. The possible values are: first, second, third, fourth, last. Default is first. Optional and used if type is relativeMonthly or relativeYearly.
     */
    private ?string $index;

    /**
     * The number of units between occurrences, where units can be in days, weeks, months, or years, depending on the type. Required.
     */
    private ?float $interval;

    /**
     * The month in which the event occurs.  This is a number from 1 to 12.
     */
    private ?float $month;

    /**
     * The recurrence pattern type: daily, weekly, absoluteMonthly, relativeMonthly, absoluteYearly, relativeYearly. Required. For more information, see values of type property.
     */
    private ?string $type;


    public function getDayOfMonth(): ?float
    {
        return $this->dayOfMonth;
    }

    public function setDayOfMonth(?float $dayOfMonth): self
    {
        $this->dayOfMonth = $dayOfMonth;
        return $this;
    }

    public function getDaysOfWeek(): array
    {
        return $this->daysOfWeek;
    }

    public function setDaysOfWeek(array $daysOfWeek): self
    {
        $this->daysOfWeek = $daysOfWeek;
        return $this;
    }

    public function getFirstDayOfWeek(): ?string
    {
        return $this->firstDayOfWeek;
    }

    public function setFirstDayOfWeek(?string $firstDayOfWeek): self
    {
        $this->firstDayOfWeek = $firstDayOfWeek;
        return $this;
    }

    public function getIndex(): ?string
    {
        return $this->index;
    }

    public function setIndex(?string $index): self
    {
        $this->index = $index;
        return $this;
    }

    public function getInterval(): ?float
    {
        return $this->interval;
    }

    public function setInterval(?float $interval): self
    {
        $this->interval = $interval;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
