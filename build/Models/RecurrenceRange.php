<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecurrenceRange
 */
class RecurrenceRange
{
    public function __construct(
        /** The date to stop applying the recurrence pattern. Depending on the recurrence pattern of the event, the last occurrence of the meeting may not be this date. Required if type is endDate. */
        public ?\DateTimeInterface $endDate = null,
        /** The number of times to repeat the event. Required and must be positive if type is numbered. */
        public ?float $numberOfOccurrences = null,
        /** Time zone for the startDate and endDate properties. Optional. If not specified, the time zone of the event is used. */
        public ?string $recurrenceTimeZone = null,
        /** The date to start applying the recurrence pattern. The first occurrence of the meeting may be this date or later, depending on the recurrence pattern of the event. Must be the same value as the start property of the recurring event. Required. */
        public ?\DateTimeInterface $startDate = null,
        /** The recurrence range. The possible values are: endDate, noEnd, numbered. Required. */
        public ?string $type = null
    ) {}
}
