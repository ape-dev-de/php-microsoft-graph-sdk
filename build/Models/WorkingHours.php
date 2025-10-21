<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkingHours
 */
class WorkingHours
{
    public function __construct(
        /** The days of the week on which the user works. */
        public array $daysOfWeek = [],
        /** The time of the day that the user stops working. */
        public ?string $endTime = null,
        /** The time of the day that the user starts working. */
        public ?string $startTime = null,
        /** The time zone to which the working hours apply. */
        public ?string $timeZone = null
    ) {}
}
