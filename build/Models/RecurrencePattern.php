<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecurrencePattern
 */
class RecurrencePattern
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The day of the month on which the event occurs. Required if type is absoluteMonthly or absoluteYearly. */
    public ?float $dayOfMonth = null;

    /** 
     * A collection of the days of the week on which the event occurs. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. If type is relativeMonthly or relativeYearly, and daysOfWeek specifies more than one day, the event falls on the first day that satisfies the pattern.  Required if type is weekly, relativeMonthly, or relativeYearly.
     * @var DayOfWeek[]
     */
    public array $daysOfWeek = [];

    /** 
     * The first day of the week. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. Default is sunday. Required if type is weekly.
     * @var DayOfWeek|\stdClass|null
     */
    public mixed $firstDayOfWeek = null;

    /** 
     * Specifies on which instance of the allowed days specified in daysOfWeek the event occurs, counted from the first instance in the month. The possible values are: first, second, third, fourth, last. Default is first. Optional and used if type is relativeMonthly or relativeYearly.
     * @var WeekIndex|\stdClass|null
     */
    public mixed $index = null;

    /** The number of units between occurrences, where units can be in days, weeks, months, or years, depending on the type. Required. */
    public ?float $interval = null;

    /** The month in which the event occurs.  This is a number from 1 to 12. */
    public ?float $month = null;

    /** 
     * The recurrence pattern type: daily, weekly, absoluteMonthly, relativeMonthly, absoluteYearly, relativeYearly. Required. For more information, see values of type property.
     * @var RecurrencePatternType|\stdClass|null
     */
    public mixed $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['dayOfMonth'])) {
            $this->dayOfMonth = $data['dayOfMonth'];
        }
        if (isset($data['daysOfWeek'])) {
            $this->daysOfWeek = $data['daysOfWeek'];
        }
        if (isset($data['firstDayOfWeek'])) {
            $this->firstDayOfWeek = is_array($data['firstDayOfWeek']) ? new DayOfWeek($data['firstDayOfWeek']) : $data['firstDayOfWeek'];
        }
        if (isset($data['index'])) {
            $this->index = is_array($data['index']) ? new WeekIndex($data['index']) : $data['index'];
        }
        if (isset($data['interval'])) {
            $this->interval = $data['interval'];
        }
        if (isset($data['month'])) {
            $this->month = $data['month'];
        }
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new RecurrencePatternType($data['type']) : $data['type'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
