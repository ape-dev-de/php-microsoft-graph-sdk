<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWindows10DevicesSummary
 */
class UserExperienceAnalyticsWindows10DevicesSummary
{
    public function __construct(
        /** The count of Windows 10 devices that have unsupported OS versions. Read-only. */
        public ?float $unsupportedOSversionDeviceCount = null
    ) {}
}
