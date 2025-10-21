<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeClockSettings
 */
class TimeClockSettings
{
    public function __construct(
        /** The approved location of the timeClock. */
        public ?GeoCoordinates $approvedLocation = null
    ) {}
}
