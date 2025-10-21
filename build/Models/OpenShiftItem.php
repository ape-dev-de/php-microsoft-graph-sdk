<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OpenShiftItem
 */
class OpenShiftItem
{
    public function __construct(
        /** Count of the number of slots for the given open shift. */
        public ?string $openSlotCount = null
    ) {}
}
