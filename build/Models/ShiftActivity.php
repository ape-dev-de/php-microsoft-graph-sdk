<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ShiftActivity
 */
class ShiftActivity
{
    public function __construct(
        /** Customer defined code for the shiftActivity. Required. */
        public ?string $code = null,
        /** The name of the shiftActivity. Required. */
        public ?string $displayName = null,
        /** The end date and time for the shiftActivity. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required. */
        public ?\DateTimeInterface $endDateTime = null,
        /** Indicates whether the microsoft.graph.user should be paid for the activity during their shift. Required. */
        public ?bool $isPaid = null,
        /** The start date and time for the shiftActivity. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required. */
        public ?\DateTimeInterface $startDateTime = null,
        /**  */
        public ?ScheduleEntityTheme $theme = null
    ) {}
}
