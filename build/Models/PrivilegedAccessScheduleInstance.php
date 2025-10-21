<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessScheduleInstance
 */
class PrivilegedAccessScheduleInstance
{
    public function __construct(
        /** When the schedule instance ends. Required. */
        public ?\DateTimeInterface $endDateTime = null,
        /** When this instance starts. Required. */
        public ?\DateTimeInterface $startDateTime = null
    ) {}
}
