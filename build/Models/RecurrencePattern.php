<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecurrencePattern
 */
class RecurrencePattern
{
    public function __construct(
        /** The day of the month on which the event occurs. Required if type is absoluteMonthly or absoluteYearly. */
        public ?float $dayOfMonth = null,
        /** A collection of the days of the week on which the event occurs. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. If type is relativeMonthly or relativeYearly, and daysOfWeek specifies more than one day, the event falls on the first day that satisfies the pattern.  Required if type is weekly, relativeMonthly, or relativeYearly. */
        public array $daysOfWeek = [],
        /** The first day of the week. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. Default is sunday. Required if type is weekly. */
        public ?DayOfWeek $firstDayOfWeek = null,
        /** Specifies on which instance of the allowed days specified in daysOfWeek the event occurs, counted from the first instance in the month. The possible values are: first, second, third, fourth, last. Default is first. Optional and used if type is relativeMonthly or relativeYearly. */
        public ?WeekIndex $index = null,
        /** The number of units between occurrences, where units can be in days, weeks, months, or years, depending on the type. Required. */
        public ?float $interval = null,
        /** The month in which the event occurs.  This is a number from 1 to 12. */
        public ?float $month = null,
        /** The recurrence pattern type: daily, weekly, absoluteMonthly, relativeMonthly, absoluteYearly, relativeYearly. Required. For more information, see values of type property. */
        public ?RecurrencePatternType $type = null
    ) {}
}
