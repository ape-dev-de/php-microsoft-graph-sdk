<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomTimeZone
 */
class CustomTimeZone
{
    public function __construct(
        /** The name of a time zone. It can be a standard time zone name such as ''Hawaii-Aleutian Standard Time'', or ''Customized Time Zone'' for a custom time zone. */
        public ?string $name = null,
        /** The time offset of the time zone from Coordinated Universal Time (UTC). This value is in minutes. Time zones that are ahead of UTC have a positive offset; time zones that are behind UTC have a negative offset. */
        public ?float $bias = null,
        /** Specifies when the time zone switches from standard time to daylight saving time. */
        public ?string $daylightOffset = null,
        /** Specifies when the time zone switches from daylight saving time to standard time. */
        public ?string $standardOffset = null
    ) {}
}
