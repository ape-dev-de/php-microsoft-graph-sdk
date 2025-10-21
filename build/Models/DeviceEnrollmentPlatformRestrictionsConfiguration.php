<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentPlatformRestrictionsConfiguration
 */
class DeviceEnrollmentPlatformRestrictionsConfiguration
{
    public function __construct(
        /** Android restrictions based on platform, platform operating system version, and device ownership */
        public ?string $androidRestriction = null,
        /** Ios restrictions based on platform, platform operating system version, and device ownership */
        public ?string $iosRestriction = null,
        /** Mac restrictions based on platform, platform operating system version, and device ownership */
        public ?string $macOSRestriction = null,
        /** Windows mobile restrictions based on platform, platform operating system version, and device ownership */
        public ?string $windowsMobileRestriction = null,
        /** Default Device Enrollment Platform Restrictions Configuration that restricts the types of devices a user can enroll */
        public ?string $windowsRestriction = null
    ) {}
}
