<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ShiftAvailability
 */
class ShiftAvailability
{
    public function __construct(
        /** Specifies the pattern for recurrence */
        public ?PatternedRecurrence $recurrence = null,
        /** The time slot(s) preferred by the user. */
        public array $timeSlots = [],
        /** Specifies the time zone for the indicated time. */
        public ?string $timeZone = null
    ) {}
}
