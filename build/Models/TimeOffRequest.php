<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeOffRequest
 */
class TimeOffRequest
{
    public function __construct(
        /** The date and time the time off ends in ISO 8601 format and in UTC time. */
        public ?\DateTimeInterface $endDateTime = null,
        /** The date and time the time off starts in ISO 8601 format and in UTC time. */
        public ?\DateTimeInterface $startDateTime = null,
        /** The reason for the time off. */
        public ?string $timeOffReasonId = null
    ) {}
}
