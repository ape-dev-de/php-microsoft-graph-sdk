<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentPlatformRestriction
 */
class DeviceEnrollmentPlatformRestriction
{
    public function __construct(
        /** Max OS version supported */
        public ?string $osMaximumVersion = null,
        /** Min OS version supported */
        public ?string $osMinimumVersion = null,
        /** Block personally owned devices from enrolling */
        public ?bool $personalDeviceEnrollmentBlocked = null,
        /** Block the platform from enrolling */
        public ?bool $platformBlocked = null
    ) {}
}
