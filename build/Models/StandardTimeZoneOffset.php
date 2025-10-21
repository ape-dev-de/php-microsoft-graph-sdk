<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StandardTimeZoneOffset
 */
class StandardTimeZoneOffset
{
    public function __construct(
        /** Represents the nth occurrence of the day of week that the transition from daylight saving time to standard time occurs. */
        public ?float $dayOccurrence = null,
        /** Represents the day of the week when the transition from daylight saving time to standard time. */
        public ?string $dayOfWeek = null,
        /** Represents the month of the year when the transition from daylight saving time to standard time occurs. */
        public ?float $month = null,
        /** Represents the time of day when the transition from daylight saving time to standard time occurs. */
        public ?string $time = null,
        /** Represents how frequently in terms of years the change from daylight saving time to standard time occurs. For example, a value of 0 means every year. */
        public ?float $year = null
    ) {}
}
