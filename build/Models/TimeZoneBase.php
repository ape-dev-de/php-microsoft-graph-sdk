<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeZoneBase
 */
class TimeZoneBase
{
    public function __construct(
        /** The name of a time zone. It can be a standard time zone name such as 'Hawaii-Aleutian Standard Time', or 'Customized Time Zone' for a custom time zone. */
        public ?string $name = null
    ) {}
}
