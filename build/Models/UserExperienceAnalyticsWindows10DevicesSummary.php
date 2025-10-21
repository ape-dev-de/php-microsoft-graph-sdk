<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWindows10DevicesSummary
 */
class UserExperienceAnalyticsWindows10DevicesSummary
{
    public function __construct(
        /** The user experience analytics work from anywhere Windows 10 devices summary. */
        public ?string $unsupportedOSversionDeviceCount = null
    ) {}
}
