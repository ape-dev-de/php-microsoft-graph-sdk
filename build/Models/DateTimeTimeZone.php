<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DateTimeTimeZone
 */
class DateTimeTimeZone
{
    public function __construct(
        /** A single point of time in a combined date and time representation ({date}T{time}; for example, 2017-08-29T04:00:00.0000000). */
        public ?string $dateTime = null,
        /** Represents a time zone, for example, 'Pacific Standard Time'. See below for more possible values. */
        public ?string $timeZone = null
    ) {}
}
