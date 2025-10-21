<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendanceInterval
 */
class AttendanceInterval
{
    public function __construct(
        /** Duration of the meeting interval in seconds; that is, the difference between joinDateTime and leaveDateTime. */
        public ?float $durationInSeconds = null,
        /** The time the attendee joined in UTC. */
        public ?\DateTimeInterface $joinDateTime = null,
        /** The time the attendee left in UTC. */
        public ?\DateTimeInterface $leaveDateTime = null
    ) {}
}
