<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeOffItem
 */
class TimeOffItem
{
    public function __construct(
        /** ID of the timeOffReason for this timeOffItem. Required. */
        public ?string $timeOffReasonId = null
    ) {}
}
