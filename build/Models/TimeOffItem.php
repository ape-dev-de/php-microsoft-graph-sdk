<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeOffItem
 */
class TimeOffItem
{
    public function __construct(
        /**  */
        public ?\DateTimeInterface $endDateTime = null,
        /**  */
        public ?\DateTimeInterface $startDateTime = null,
        /**  */
        public ?string $theme = null,
        /** ID of the timeOffReason for this timeOffItem. Required. */
        public ?string $timeOffReasonId = null
    ) {}
}
