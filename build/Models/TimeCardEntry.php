<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCardEntry
 */
class TimeCardEntry
{
    public function __construct(
        /** The clock-in event of the timeCard. */
        public array $breaks = [],
        /** The clock-out event of the timeCard. */
        public ?TimeCardEvent $clockInEvent = null,
        /** The list of breaks associated with the timeCard. */
        public ?TimeCardEvent $clockOutEvent = null
    ) {}
}
