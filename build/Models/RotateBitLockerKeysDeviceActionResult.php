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
        public ?string $actionState = null,
        /** Time the action state was last updated */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /** Device action result */
        public ?\DateTimeInterface $startDateTime = null,
        /** RotateBitLockerKeys device action result */
        public ?string $errorCode = null
    ) {}
}
