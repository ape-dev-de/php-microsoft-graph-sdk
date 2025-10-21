<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DaylightTimeZoneOffset
 */
class DaylightTimeZoneOffset
{
    public function __construct(
        /** The time offset from Coordinated Universal Time (UTC) for daylight saving time. This value is in minutes. */
        public ?string $daylightBias = null
    ) {}
}
