<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResetPasscodeActionResult
 */
class ResetPasscodeActionResult
{
    public function __construct(
        /** Action name */
        public ?string $actionName = null,
        /**  */
        public ?ActionState $actionState = null,
        /** Time the action state was last updated */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /** Time the action was initiated */
        public ?\DateTimeInterface $startDateTime = null,
        /** RotateBitLockerKeys action error code. Valid values 0 to 2147483647 */
        public ?float $errorCode = null,
        /** Newly generated passcode for the device */
        public ?string $passcode = null
    ) {}
}
