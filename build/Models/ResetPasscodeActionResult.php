<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResetPasscodeActionResult
 */
class ResetPasscodeActionResult
{
    public function __construct(
        /** RotateBitLockerKeys action error code. Valid values 0 to 2147483647 */
        public ?float $errorCode = null,
        /** Reset passcode action result */
        public ?string $passcode = null
    ) {}
}
