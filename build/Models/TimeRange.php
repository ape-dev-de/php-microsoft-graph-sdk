<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeRange
 */
class TimeRange
{
    public function __construct(
        /** End time for the time range. */
        public ?string $endTime = null,
        /** Start time for the time range. */
        public ?string $startTime = null
    ) {}
}
