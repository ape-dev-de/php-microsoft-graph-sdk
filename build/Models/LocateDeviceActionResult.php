<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocateDeviceActionResult
 */
class LocateDeviceActionResult
{
    public function __construct(
        /** Locate device action result */
        public ?string $deviceLocation = null
    ) {}
}
