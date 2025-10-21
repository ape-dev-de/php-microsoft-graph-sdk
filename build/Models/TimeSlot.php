<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeSlot
 */
class TimeSlot
{
    public function __construct(
        /**  */
        public ?string $end = null,
        /**  */
        public ?string $start = null
    ) {}
}
