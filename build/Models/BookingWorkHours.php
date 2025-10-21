<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingWorkHours
 */
class BookingWorkHours
{
    public function __construct(
        /**  */
        public ?string $day = null,
        /** @var string[] This type represents the set of working hours in a single day of the week. */
        public array $timeSlots = []
    ) {}
}
