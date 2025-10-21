<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PatternedRecurrence
 */
class PatternedRecurrence
{
    public function __construct(
        /** The frequency of an event.  For access reviews: Do not specify this property for a one-time access review.  Only interval, dayOfMonth, and type (weekly, absoluteMonthly) properties of recurrencePattern are supported. */
        public ?RecurrencePattern $pattern = null,
        /** The duration of an event. */
        public ?RecurrenceRange $range = null
    ) {}
}
