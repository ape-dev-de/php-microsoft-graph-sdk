<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsCloudIdentityDevicesSummary
 */
class UserExperienceAnalyticsCloudIdentityDevicesSummary
{
    public function __construct(
        /** The user experience analytics work from anywhere cloud identity devices summary. */
        public ?string $deviceWithoutCloudIdentityCount = null
    ) {}
}
