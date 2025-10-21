<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCardBreak
 */
class TimeCardBreak
{
    public function __construct(
        /** ID of the timeCardBreak. */
        public ?string $breakId = null,
        /** The start event of the timeCardBreak. */
        public ?string $end = null,
        /** Notes about the timeCardBreak. */
        public ?string $notes = null,
        /**  */
        public ?string $start = null
    ) {}
}
