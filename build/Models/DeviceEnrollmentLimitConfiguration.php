<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentLimitConfiguration
 */
class DeviceEnrollmentLimitConfiguration
{
    public function __construct(
        /** Device Enrollment Configuration that restricts the number of devices a user can enroll */
        public ?string $limit = null
    ) {}
}
