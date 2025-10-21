<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SwapShiftsChangeRequest
 */
class SwapShiftsChangeRequest
{
    public function __construct(
        /** The recipient's Shift ID */
        public ?string $recipientShiftId = null
    ) {}
}
