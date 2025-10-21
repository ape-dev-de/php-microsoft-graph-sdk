<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UpdateWindowsDeviceAccountActionParameter
 */
class UpdateWindowsDeviceAccountActionParameter
{
    public function __construct(
        /** Not yet documented */
        public ?bool $calendarSyncEnabled = null,
        /** Not yet documented */
        public ?WindowsDeviceAccount $deviceAccount = null,
        /** Not yet documented */
        public ?string $deviceAccountEmail = null,
        /** Not yet documented */
        public ?string $exchangeServer = null,
        /** Not yet documented */
        public ?bool $passwordRotationEnabled = null,
        /** Not yet documented */
        public ?string $sessionInitiationProtocalAddress = null
    ) {}
}
