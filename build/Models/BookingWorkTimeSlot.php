<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingWorkTimeSlot
 */
class BookingWorkTimeSlot
{
    public function __construct(
        /** The time of the day when work stops. For example, 17:00:00.0000000. */
        public ?string $endTime = null,
        /** The time of the day when work starts. For example, 08:00:00.0000000. */
        public ?string $startTime = null
    ) {}
}
