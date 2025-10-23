<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DaylightTimeZoneOffset
 */
class DaylightTimeZoneOffset
{
    /** Represents the nth occurrence of the day of week that the transition from daylight saving time to standard time occurs. */
    public ?float $dayOccurrence = null;

    /** 
     * Represents the day of the week when the transition from daylight saving time to standard time.
     * @var DayOfWeek|\stdClass|null
     */
    public mixed $dayOfWeek = null;

    /** Represents the month of the year when the transition from daylight saving time to standard time occurs. */
    public ?float $month = null;

    /** Represents the time of day when the transition from daylight saving time to standard time occurs. */
    public ?string $time = null;

    /** Represents how frequently in terms of years the change from daylight saving time to standard time occurs. For example, a value of 0 means every year. */
    public ?float $year = null;

    /** The time offset from Coordinated Universal Time (UTC) for daylight saving time. This value is in minutes. */
    public ?float $daylightBias = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['dayOccurrence'])) {
            $this->dayOccurrence = $data['dayOccurrence'];
        }
        if (isset($data['dayOfWeek'])) {
            $this->dayOfWeek = $data['dayOfWeek'];
        }
        if (isset($data['month'])) {
            $this->month = $data['month'];
        }
        if (isset($data['time'])) {
            $this->time = $data['time'];
        }
        if (isset($data['year'])) {
            $this->year = $data['year'];
        }
        if (isset($data['daylightBias'])) {
            $this->daylightBias = $data['daylightBias'];
        }
    }
}
