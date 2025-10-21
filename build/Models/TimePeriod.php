<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimePeriod
 */
class TimePeriod
{
    public function __construct(
        /** The date time of the end of the time period. */
        public ?\DateTimeInterface $endDateTime = null,
        /** The date time of the start of the time period. */
        public ?\DateTimeInterface $startDateTime = null
    ) {}
}
