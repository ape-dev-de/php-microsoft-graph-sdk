<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteLockActionResult
 */
class RemoteLockActionResult
{
    public function __construct(
        /** Lock action result with a pin to unlock */
        public ?string $unlockPin = null
    ) {}
}
