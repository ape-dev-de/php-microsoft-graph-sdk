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
        /** A list of start/end times during a day. */
        public array $timeSlots = []
    ) {}
}
