<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ShiftPreferences
 */
class ShiftPreferences
{
    public function __construct(
        /** @var string[] Availability of the user to be scheduled for work and its recurrence pattern. */
        public array $availability = []
    ) {}
}
