<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeZoneInformation
 */
class TimeZoneInformation
{
    public function __construct(
        /** An identifier for the time zone. */
        public ?string $alias = null,
        /** A display string that represents the time zone. */
        public ?string $displayName = null
    ) {}
}
