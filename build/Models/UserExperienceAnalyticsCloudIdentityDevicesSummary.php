<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsCloudIdentityDevicesSummary
 */
class UserExperienceAnalyticsCloudIdentityDevicesSummary
{
    public function __construct(
        /** The count of devices that are not cloud identity. Read-only. */
        public ?float $deviceWithoutCloudIdentityCount = null
    ) {}
}
