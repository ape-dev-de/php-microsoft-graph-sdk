<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceExchangeAccessStateSummary
 */
class DeviceExchangeAccessStateSummary
{
    public function __construct(
        /** Total count of devices with Exchange Access State: Allowed. */
        public ?float $allowedDeviceCount = null,
        /** Total count of devices with Exchange Access State: Blocked. */
        public ?float $blockedDeviceCount = null,
        /** Total count of devices with Exchange Access State: Quarantined. */
        public ?float $quarantinedDeviceCount = null,
        /** Total count of devices for which no Exchange Access State could be found. */
        public ?float $unavailableDeviceCount = null,
        /** Device Exchange Access State summary */
        public ?string $unknownDeviceCount = null
    ) {}
}
