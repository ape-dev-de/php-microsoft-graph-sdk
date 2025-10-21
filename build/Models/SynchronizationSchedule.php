<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationSchedule
 */
class SynchronizationSchedule
{
    public function __construct(
        /** Date and time when this job expires. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $expiration = null,
        /** The interval between synchronization iterations. The value is represented in ISO 8601  format for durations. For example, P1M represents a period of one month and PT1M represents a period of one minute. */
        public ?string $interval = null,
        /**  */
        public ?string $state = null
    ) {}
}
