<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RotateBitLockerKeysDeviceActionResult
 */
class RotateBitLockerKeysDeviceActionResult
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
        /** RotateBitLockerKeys action error code */
        public ?float $errorCode = null
    ) {}
}
